<?php
namespace App\Models;

use Phalcon\Mvc\Model as Model;


class Wishlist extends Model
{
    public $id_wishlist;
    public $id_produk;
    public $id_user;

    public function initialize(){
        // read data dari db
        $this->setReadConnectionService('db');

        // write data ke db
        $this->setWriteConnectionService('db');

        // Untuk mengeset schema, default : empty string
        $this->setSchema('imbashoe_kelompok');

        // Untuk mengeset nama tabel, default : nama class
        $this->setSource('wishlist');

        $this->belongsTo(
            'id_produk',
            Produk::class,
            'id_produk',
            [
                'reusable'  =>  true,
                'alias'     =>  'produk'
            ]
            );
        $this->belongsTo(
            'id_user',
            Users::class,
            'id_user',
            [
                'reusable'  =>  true,
                'alias'     =>  'user'
            ]
            );
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }
}