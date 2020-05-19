<?php

declare(strict_types=1);
namespace App\Controllers;

use App\Models\Users as Users;
use App\Models\Produk as Produk;
use App\Validation\UserValidation as UserValidation;
use App\Validation\ProdukValidation as ProdukValidation;

use Phalcon\Mvc\Controller;

class AdminController extends ControllerBase
{
    public function indexAction()
    {
        $produk = new Produk();
        $this->view->produk = Produk::find();
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        $admin = new Users();
        $this->view->admin = Users::find("peran = 'admin'");
        
    }
    public function editprofileAction($id_user)
    {
        // echo "$this->session->has('auth')";
        $editUser = Users::findFirstByid_user($id_user);
        $this->view->user = $editUser;
        // $this->view->setVar('user', $editUser);
        $produk = new Produk();
        $this->view->produk = Produk::find();
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        
        // echo $this->tag->linkTo(["'/home/index'", 'List User', 'class' => 'btn btn-primary']);
    }
    public function editprodukAction($id_produk)
    {
        $editProduk = Produk::findFirstByid_produk($id_produk);
        $this->view->prod = $editProduk;
        // echo $this->tag->linkTo(['/admin/listproduk', 'List Produk', 'class' => 'btn btn-lg btn-outline-primary']);

        $produk = new Produk();
        $this->view->produk = Produk::find();
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        
        // echo $this->tag->linkTo(["'/home/index'", 'List User', 'class' => 'btn btn-primary']);
    }
    

    public function updateprodukAction($id_produk)
    {
        $valid = new ProdukValidation();
        $message = $valid->validate($_POST);
        if(!count($message))
        {
            $prod = Produk::findFirstByid_produk($id_produk);
            $prod->assign(
                $this->request->getPost(),
                [
                    'nama_produk',
                    'brand_produk',
                    'deskripsi_produk',
                    'harga_produk',
                    'status_produk',
                ]
            );
            if($this->request->hasFiles())
            {
                $img = $this->request->getUploadedFiles()[0];
                $path = 'img/'.$img->getName();
                unlink($prod->foto_produk);
                $prod->foto_produk = $path;
                $img->moveTo($path);
            }
            // Store and check for errors
            $success = $prod->save();
            $this->view->success = $success;

            if ($success) {
                echo "Produk berhasil diupdate. <br>";
                $this->response->redirect('/admin/listproduk');
            }
            
            echo $this->tag->linkTo(['/produk/list', 'List Produk', 'class' => 'btn btn-primary']);

        }
        else
        {
            foreach ($message as $msg) 
            {
                $this->flashSession->error($msg->getMessage());
            }
            echo $this->tag->linkTo(['/admin', 'Admin Home', 'class' => 'btn btn-primary']);

        }
    }

    public function cariprodukAction()
    {
        $cari_nama = $this->request->getPost('nama');
        $this->view->nama_prod = $cari_nama;
        $cari_nama = '%'.$cari_nama.'%';
        // echo $cari_nama;
        $produk = Produk::query()
            ->where('nama_produk LIKE :cari_nama:')
            ->bind(
                [
                    'cari_nama' => $cari_nama,
                ]
            )
            ->execute();
        $this->view->cari = $produk;


        $produk = new Produk();
        $this->view->produk = Produk::find();
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
    }

    public function tambahAction()
    {
        $produk = new Produk();
        $this->view->produk = Produk::find();
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        $admin = new Users();
        $this->view->admin = Users::find("peran = 'admin'");
    }
    public function tambahprodukAction()
    {
        $produk = new Produk();

        //assign value from the form to $user
        $produk->assign(
            $this->request->getPost(),
            [
                'nama_produk',
                'brand_produk',
                'deskripsi_produk',
                'harga_produk',
                'kategori',
                'status_produk',
            ]
        );
        if($this->request->hasFiles())
        {
            $img = $this->request->getUploadedFiles()[0];
            $path = 'img/'.$img->getName();
            $produk->foto_produk = $path;
            $img->moveTo($path);
        }

        // Store and check for errors
        $success = $produk->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Produk berhasil ditambahkan.";
        } else {
            $message = "Terdapat kesalahan ketika menambahkan produk:<br>"
                     . implode('<br>', $produk->getMessages());
        }
        $this->response->redirect('/admin/listproduk');
        // passing a message to the view
        $this->view->message = $message;

        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }

    public function hapusprodukAction($id_produk)
    {
        $prod = Produk::findFirstByid_produk($id_produk);
        unlink($prod->foto_produk);
        $success = $prod->delete();
        $this->view->success = $success;

        if ($success)
         {
            echo "Produk berhasil dihapus. <br>";
        }
        // echo 'Produk berhasil dihapus.<br>';
        echo $this->tag->linkTo(['/admin/listproduk', 'List Produk', 'class' => 'btn btn-primary']);
    }

    public function listuserAction()
    {
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }
    public function listprodukAction()
    {
        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }
    public function hapususerAction($id_user)
    {
        $user = new Users();
        $usr = Users::findFirstByid_user($id_user);
        $success = $usr->delete();
        if($success)
        {
            $this->flashSession->error('User berhasil dihapus.');
        }
        echo 'User berhasil dihapus.<br>';
        echo $this->tag->linkTo(['/signup/list', 'List User', 'class' => 'btn btn-primary']);
    }
    public function registeruserAction()
    {
        $user = new Users();

        //assign value from the form to $user
        $user->assign(
            $this->request->getPost(),
            [
                'username',
                'nama',
                'email',
                'alamat',
                'no_hp',
            ]
        );
        $pass = $this->request->getPost('pass');
        $user->pass = $this->security->hash($pass);
        if ($this->request->getPost('username') == 'admin')
        {
            $user->peran = 'admin';
        }
        else 
        {
            $user->peran = 'user';
        }
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
    public function cariuserAction()
    {
        $cari_nama = $this->request->getPost('nama');
        $this->view->nama_user = $cari_nama;
        $cari_nama = '%'.$cari_nama.'%';
        // echo $cari_nama;
        $user = Users::query()
            ->where('nama LIKE :cari_nama:')
            ->bind(
                [
                    'cari_nama' => $cari_nama,
                ]
            )
            ->execute();
        $this->view->cari = $user;
        // $this->response->redirect('/produk/cari');
    }
}