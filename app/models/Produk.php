<?php
namespace App\Models;

use Phalcon\Mvc\Model as Model;

class Produk extends Model
{
    public $id_produk;
    public $nama_produk;
    public $brand_produk;
    public $deskripsi_produk;
    public $harga_produk;
    public $foto_produk;
    public $status_produk;

    public function initialize(){
        // read data dari db
        $this->setReadConnectionService('db');

        // write data ke db
        $this->setWriteConnectionService('db');

        // Untuk mengeset schema, default : empty string
        $this->setSchema('dbo');

        // Untuk mengeset nama tabel, default : nama class
        $this->setSource('produk');
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }
}