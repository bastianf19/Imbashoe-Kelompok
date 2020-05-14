<?php
namespace App\Models;

use Phalcon\Mvc\Model as Model;

class Users extends Model
{
    public $id;
    public $nama;
    public $email;
    public $pass;
    public $alamat;
    public $no_hp;

    public function initialize(){
        // read data dari db
        $this->setReadConnectionService('db');

        // write data ke db
        $this->setWriteConnectionService('db');

        // Untuk mengeset schema, default : empty string
        $this->setSchema('dbo');

        // Untuk mengeset nama tabel, default : nama class
        $this->setSource('users');
    }

    /**
     *  Dipanggil setiap pembuatan instace class baru
     */
    public function onConstruct(){

    }
}