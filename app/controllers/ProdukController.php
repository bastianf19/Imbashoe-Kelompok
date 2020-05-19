<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;

use App\Models\Produk as Produk;
use App\Models\Users as Users;
use App\Models\Wishlist as Wishlist;

use App\Validation\ProdukValidation as ProdukValidation;

class ProdukController extends ControllerBase
{
    public function indexAction()
    {

    }

    public function tambahwishAction($id_prod)
    {
        $wish = new Wishlist();
        //assign value from the form to $user
        // $id_prod = $this->request->getPost('id_produk');
        $wish->id_produk = $id_prod;
        $wish->id_user = $this->session->get('auth')['id_user'];

        $success = $wish->save();
        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            echo "Berhasil menambahkan produk ke dalam wishlist.";
        } else {
            echo "Terdapat kesalahan ketika menambahkan produk:<br>"
                     . implode('<br>', $wish->getMessages());
        }
        echo $this->tag->linkTo(['/home', 'Home', 'class' => 'btn btn-primary']); 
        // passing a message to the view
    }

    public function listwishAction()
    {
        $wish = new Wishlist();
        $userid = $this->session->get('auth')['id_user'];
        $wish = Wishlist::findByid_user($userid);
        $this->view->cari = $wish;
    }

    public function hapuswishAction($id_wish)
    {
        $wish = Wishlist::findFirstByid_wishlist($id_wish);
        $success = $wish->delete();
        if($success)
        {
            $this->flashSession->error('Wishlist berhasil dihapus.');
        }
        echo 'Wishlist berhasil dihapus.<br> <br>';
        echo $this->tag->linkTo(['/admin/listproduk', 'List Produk', 'class' => 'btn btn-lg btn-outline-primary']);
    }

    public function detailAction($id_produk)
    {
    //     $produk = new Produk();
    //     // $id_produk = 1;
    //     $this->view->produk = Produk::find($id_produk);
        $produk = Produk::findFirstByid_produk($id_produk);
        $this->view->produk = $produk;
        if($this->session->exists())
        {
            $this->view->sess = 1;
        }
        else 
        {
            $this->view->sess = 0;
        }
    }
    public function cariAction()
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
        // $this->response->redirect('/produk/cari');
    }
    public function listAction()
    {
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }
}