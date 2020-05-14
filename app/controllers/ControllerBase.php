<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    // Implement common logic
    public function onConstruct()
    {
        $this->ses = $this->session->has('auth');
    }
    public function beforeExecuteRoute()
    {
        if(!$this->ses)
        {
            $this->response->redirect('/');
            return false;
        }
    }
    
}
