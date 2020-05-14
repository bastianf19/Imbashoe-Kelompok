<?php
namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Users as Users;

use App\Validation\UserValidation as UserValidation;

class SignupController extends ControllerBase
{
    public function beforeExecuteRoute()
    {

    }
    public function indexAction()
    {
        // $this->response->redirect('/menu');
    }
    public function registerAction()
    {
        $user = new Users();

        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(),
            [
                'nama',
                'email',
                'alamat',
                'no_hp',
                ]
            );
        $pass = $this->request->getPost('pass');
        $user->pass = $this->security->hash($pass);
        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }
    public function listAction()
    {
        $user = new Users();
        $this->view->users = Users::find();
    }
    public function editAction($id_user)
    {
        $editUser = Users::findFirstByid_user($id_user);
        $this->view->user = $editUser;
        echo $this->tag->linkTo(['/signUp/list', 'List User', 'class' => 'btn btn-primary']);
    }
    public function hapusAction($id_user)
    {
        $user = new Users();
        $usr = Users::findFirstByid_user($id_user);
        $success = $usr->delete();
        if($success)
        {
            $this->flashSession->error('User berhasil dihapus.');
        }
        echo 'User berhasil dihapus.<br>';
        echo $this->tag->linkTo(['/signUp/list', 'List User', 'class' => 'btn btn-primary']);
    }
    public function updateAction($id_user)
    {
        $user = new Users();
        $valid = new UserValidation();
        $message = $valid->validate($_POST);
        if(!count($message))
        {
            $usr = Users::findFirstByid_user($id_user);
            $usr->assign(
                $this->request->getPost(),
                [
                    'nama',
                    'email',
                    'alamat',
                    'no_hp',
                ]
            );
            $pass = $this->request->getPost('pass');
            $usr->pass = $this->security->hash($pass);
            // Store and check for errors
            $success = $usr->save();
            // $this->flashSession->error('Produk berhasil dirubah.');
            echo 'User berhasil dirubah.';
            echo $this->tag->linkTo(['/signUp/list', 'List User', 'class' => 'btn btn-primary']);
        }
        else
        {
            foreach ($message as $msg) 
            {
                $this->flashSession->error($msg->getMessage());
            }
            echo $this->tag->linkTo(['/', 'Home', 'class' => 'btn btn-primary']);

        }
    }
}