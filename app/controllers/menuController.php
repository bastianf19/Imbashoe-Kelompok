<?php
namespace App\Controllers;

use Phalcon\Mvc\Controller;

class menuController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->nama_user = $this->session->get('nama');
    }
}