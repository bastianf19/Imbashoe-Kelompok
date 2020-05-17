<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Produk as Produk;
use App\Validation\ProdukValidation as ProdukValidation;
use Phalcon\Mvc\Controller;

class IndexController extends ControllerBase
{
    public function indexAction()
    {
        $produk = new Produk();
        $this->view->produk = Produk::find();
    }
    public function beforeExecuteRoute()
    {

    }
}

