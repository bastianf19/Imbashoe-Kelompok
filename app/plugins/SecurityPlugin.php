<?php
declare(strict_types=1);

namespace App\Plugins;

use Phalcon\Acl\Adapter\Memory as AclList;
use Phalcon\Acl\Component;
use Phalcon\Acl\Role;
use Phalcon\Acl\Enum;
use Phalcon\Di\Injectable;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;

class SecurityPlugin extends Injectable
{
    /**
     * This action is executed before execute any action in the application
     *
     * @param Event $event
     * @param Dispatcher $dispatcher
     * @return bool
     */
    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {
        $auth = $this->session->get('auth')['peran'];
        if ($auth == 'admin') {
            $role = 'admin';
        }
        else if ($auth == 'user'){
            $role = 'user';
        } 
        else{
            $role = 'umum';
        }

        $controller = $dispatcher->getControllerName();
        $action = $dispatcher->getActionName();

        $acl = $this->getAcl();

        if (!$acl->isComponent($controller)) {
            $dispatcher->forward([
                'controller' => 'error',
                'action'     => 'notFound',
            ]);

            return false;
        }

        $allowed = $acl->isAllowed($role, $controller, $action);
        if (!$allowed) {
            $dispatcher->forward([
                'controller' => 'error',
                'action'     => 'unauthorized',
            ]);
            

            // $this->session->destroy();

            return false;
        }

        return true;
    }

    /**
     * Returns an existing or new access control list
     *
     * @returns AclList
     */
    protected function getAcl(): AclList
    {
        if (isset($this->persistent->acl)) {
            return $this->persistent->acl;
        }

        $acl = new AclList();
        $acl->setDefaultAction(Enum::DENY);

        // Register roles
        $roles = [
            'admin'  => new Role(
                'admin',
                'Dapat mengakses seluruh sistem'
            ),
            'user' => new Role(
                'user',
                'Dapat mengakses Produk dan pencarian produk'
            ),
            'umum' => new Role(
                'umum',
                'Tidak memiliki hak akses ke dalam sistem'
            )
        ];

        foreach ($roles as $role) {
            $acl->addRole($role);
        }

        // admin
        $adminprivateResources = [
            'produk'        => ['index', 'tambah', 'cari', 'list', 'edit', 'update', 'hapus'],
            'Produk'        => ['index', 'tambah', 'cari', 'list', 'edit', 'update', 'hapus'],
            'admin'         => ['index', 'tambah', 'editprofile', 'listuser', 'hapususer', 'cariuser', 'edituser', 'updateuser', 'tambahuser', 'registeruser', 'listproduk', 'cariproduk', 'tambahproduk', 'editproduk', 'updateproduk', 'hapusproduk'],
            'Session'       => ['index', 'login', 'logout'],
            'signup'        => ['index', 'register', 'list', 'edit', 'update', 'cari', 'hapus'],
        ];
        foreach ($adminprivateResources as $resource => $actions) {
            $acl->addComponent(new Component($resource), $actions);
        }
        
        // user
        $userprivateResources = [
            'produk'    => ['cari', 'list', 'detail', 'tambahwish', 'listwish', 'hapuswish'],
            'signup'    => ['edit', 'update'],
        ];
        foreach ($userprivateResources as $resource => $actions) {
            $acl->addComponent(new Component($resource), $actions);
        }

        //Public area resources
        $publicResources = [
            'index'     => ['index'],
            'home'      => ['index'],
            'produk'    => ['detail'],
            'error'     => ['notFound', 'serverError'],
            'Session'   => ['index','produk', 'login', 'logout'],
            'signup'    => ['index', 'register'],
        ];
        foreach ($publicResources as $resource => $actions) {
            $acl->addComponent(new Component($resource), $actions);
        }

        //Grant access to public areas to both master and admins
        foreach ($roles as $role) {
            foreach ($publicResources as $resource => $actions) {
                foreach ($actions as $action) {
                    $acl->allow($role->getName(), $resource, $action);
                }
            }
        }

        foreach ($userprivateResources as $resource => $actions) {
            foreach ($actions as $action) {
                $acl->allow('user', $resource, $action);
            }
        }

        foreach ($adminprivateResources as $resource => $actions) {
            foreach ($actions as $action) {
                $acl->allow('admin', $resource, $action);
            }
        }

        //The acl is stored in session, APC would be useful here too
        $this->persistent->acl = $acl;

        return $acl;
    }
}