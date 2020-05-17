<?php
namespace App\Models;
use Phalcon\Validation;

use Phalcon\Mvc\Model as Model;

// use Phalcon\Validation\Validator\Email as EmailValidator;


class Produk extends Model
{

    /**
     *
     * @var integer
     */
    public $id_produk;

    /**
     *
     * @var string
     */
    public $nama_produk;

    /**
     *
     * @var string
     */
    public $brand_produk;

    /**
     *
     * @var string
     */
    public $deskripsi_produk;

    /**
     *
     * @var double
     */
    public $harga_produk;

    /**
     *
     * @var string
     */
    public $foto_produk;

    /**
     *
     * @var string
     */
    public $kategori;

    /**
     *
     * @var string
     */
    public $status_produk;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        // read data dari db
        $this->setReadConnectionService('db');

        // write data ke db
        $this->setWriteConnectionService('db');
        $this->setSchema("dbo");
        $this->setSource("produk");

        $this->hasManyToMany(
            'id_produk',
            Wishlist::class,
            'id_produk',
            'id_user',
            Users::class,
            'id_user',
            [
                'reusable'  => true,
                'alias'     => 'user',
            ]
            );

        $this->hasMany(
            'id_produk',
            Wishlist::class,
            'id_produk',
            [
                'reusable'  => true,
                'alias'     => 'wishlist',
            ]
            );
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Produk[]|Produk|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Produk|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
