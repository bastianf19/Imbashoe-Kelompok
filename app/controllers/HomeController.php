<?php
declare(strict_types=1);

namespace App\Controllers;
use Phalcon\Mvc\Controller;

use App\Models\Users;
use App\Validation\UserValidation;

use App\Models\Produk as Produk;
use App\Validation\ProdukValidation as ProdukValidation;


class HomeController extends ControllerBase
{

    public function indexAction()
    {
        // $user = new Users();
        // $this->view->users = Users::find();
        
        $editUser = Users::findFirstByid_user($id_user);
        $this->view->user = $editUser;

        $produk = new Produk();
        $this->view->produk = Produk::find();
        
        
    }

    

}

