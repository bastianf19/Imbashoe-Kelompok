<?php

namespace App\Controllers;

use App\Models\Users;

use Phalcon\Mvc\Controller;

class SessionController extends ControllerBase
{
    public function indexAction()
    {

    }
    public function beforeExecuteRoute()
    {

    }
    public function loginAction()
    {
        $nama = $this->request->getPost('nama', 'string');
        $pass = $this->request->getPost('pass', 'string');
        $user = Users::findFirst(
            [
                'conditions' => 'nama = :nama:',
                'bind' => [
                    'nama' => $nama,
                ],
            ]
        );

        if($user)
        {
            $check = $this->security->checkHash($pass, $user->pass);
            if($check)
            {
                $this->session->set(
                    'auth',[
                        'id_user' => $user->id_user,
                        'nama' => $user->nama,
                        'email' => $user->email,
                        'pass' => $user->pass,
                        'alamat' => $user->alamat,
                        'no_hp' => $user->no_hp,
                    ]
                );
                $this->response->redirect('/menu');
            }
            else
            {
                $this->flashSession->error('Password salah');
                $this->response->redirect('/');
            }
        }
        else
        {
            $this->flashSession->error('Username salah');
            $this->response->redirect('/');
        }
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
    }
}