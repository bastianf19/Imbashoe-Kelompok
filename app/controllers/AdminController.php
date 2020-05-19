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
        $this->view->produk = $editProduk;
        echo $this->tag->linkTo(['/admin/listproduk', 'List Produk', 'class' => 'btn btn-lg btn-outline-primary']);

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

        // passing a message to the view
        $this->view->message = $message;

        $user = new Users();
        $this->view->users = Users::find("peran = 'user'");
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }

    public function hapusprodukAction($id_user)
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
        echo $this->tag->linkTo(['/admin/produk/list', 'List Produk', 'class' => 'btn btn-primary']);
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
    
}


// class AdminController extends \Phalcon\Mvc\Controller
// {

//     public function indexAction()
//     {

//     }

// }
