<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Models\Users;


class SessionController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
    public function produkAction()
    {
        
    }
    public function loginAction()
    {
        $username = $this->request->getPost('username', 'string');
        $pass = $this->request->getPost('pass', 'string');
        $user = Users::findFirst(
            [
                'conditions' => 'username = :username:',
                'bind' => [
                    'username' => $username,
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
                        'username'=> $user->username,
                        'nama' => $user->nama,
                        'email' => $user->email,
                        'pass' => $user->pass,
                        'alamat' => $user->alamat,
                        'no_hp' => $user->no_hp,
                        'peran' => $user->peran,
                    ]
                );
                $auth = $this->session->get('auth')['peran'];
                if($auth == 'admin')
                {
                    $this->response->redirect('/admin');
                }
                else
                {
                    $this->response->redirect('/home');
                }
            }
            else
            {
                $this->flashSession->error('Password salah');
                echo 'Password Anda Salah <br>';
                echo $this->tag->linkTo(['/', 'Kembali', 'class' => 'btn btn-primary']);
            }
        }
        else
        {
            
            $this->flashSession->error('Username salah');
            echo 'Username Anda Tidak Terdaftar, <br>';
            echo $this->tag->linkTo(['/signup', 'Daftar Aja Yuk!', 'class' => 'btn btn-primary']);
        }
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
    }

}

