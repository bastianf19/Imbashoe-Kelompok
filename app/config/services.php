<?php
declare(strict_types=1);

use Phalcon\Escaper;
use Phalcon\Events\Event;
use Phalcon\Flash\Direct as Flash;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Session\Adapter\Stream as SessionAdapter;
use Phalcon\Session\Manager as SessionManager;
use Phalcon\Url as UrlResolver;
use App\Plugins\SecurityPlugin;
use Phalcon\Session\Bag;
/**
 * Shared configuration service
 */
$di->setShared('config', function () use ($config) {
    return $config;
});

$di->setShared('request_uri', function (){
    $config = $this->getConfig();
    return $config->application->baseUri == '/' ?
        $_SERVER['REQUEST_URI'] : str_replace($config->application->baseUri, '', $_SERVER['REQUEST_URI']);
});

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setShared('url', function () {
    $config = $this->getConfig();

    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});

/**
 * Setting up the view component
 */
$di->setShared('view', function () {
    $config = $this->getConfig();

    $view = new View();
    $view->setDI($this);
    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines([
        '.volt' => function ($view) {
            $config = $this->getConfig();

            $volt = new VoltEngine($view, $this);

            $volt->setOptions([
                'path' => $config->application->cacheDir,
                'separator' => '_'
            ]);

            return $volt;
        },
        '.phtml' => PhpEngine::class

    ]);

    return $view;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () {
    $config = $this->getConfig();

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
    $params = [
        'host'     => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname'   => $config->database->dbname,
        'port'   => $config->database->port,
        'charset'  => $config->database->charset
    ];

    if ($config->database->adapter == 'Postgresql' || $config->database->adapter == 'Sqlite') {
        unset($params['charset']);
    }

    return new $class($params);
});


/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->setShared('modelsMetadata', function () {
    return new MetaDataAdapter();
});

/**
 * Register the session flash service with the Twitter Bootstrap classes
 */
$di->set('flash', function () {
    $escaper = new Escaper();
    $flash = new Flash($escaper);
    $flash->setImplicitFlush(false);
    $flash->setCssClasses([
        'error'   => 'alert alert-danger',
        'success' => 'alert alert-success',
        'notice'  => 'alert alert-info',
        'warning' => 'alert alert-warning'
    ]);

    return $flash;
});

/**
 * Start the session the first time some component request the session service
 */
$di->setShared('sessionBag', function () {
            return new Bag('bag');
});

$di->setShared('session', function () {
    $session = new SessionManager();
    $files = new SessionAdapter([
        'savePath' => sys_get_temp_dir(),
    ]);
    $session->setAdapter($files);
    $session->start();

    return $session;
});

$di->setShared('dispatcher', function() {

    $eventsManager = $this->getShared('eventsManager');

    $eventsManager->attach(
        'dispatch:beforeException',
        function (Event $event, Dispatcher $dispatcher, Exception $exception) {
            // 404
            if ($exception instanceof \Phalcon\Dispatcher\Exception) {
                $dispatcher->forward(
                    [
                        'controller' => 'error',
                        'action'     => 'notFound',
                    ]
                );

                return false;
            }
        }
    );
    $eventsManager->attach(
            'dispatch:beforeExecuteRoute',
            new SecurityPlugin()
    );
    $dispatcher = new Dispatcher();

    //Bind the EventsManager to the dispatcher
    $dispatcher->setEventsManager($eventsManager);

    return $dispatcher;

});