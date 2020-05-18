<?php

namespace App\Models;

use Phalcon\Mvc\Model;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id_user;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $nama;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $pass;

    /**
     *
     * @var string
     */
    public $alamat;

    /**
     *
     * @var string
     */
    public $no_hp;

    /**
     *
     * @var string
     */
    public $peran;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        // read data dari db
        $this->setReadConnectionService('db');

        // write data ke db
        $this->setWriteConnectionService('db');
        $this->setSchema("imbashoe_kelompok");
        $this->setSource("Users");

        $this->hasMany(
            'id_user',
            Wishlist::class,
            'id_user'
        );

        $this->hasManyToMany(
            'id_user',
            Wishlist::class,
            'id_user',
            'id_produk',
            Produk::class,
            'id_produk',
            [
                'reusable'  =>  true,
                'alias'     =>  'produk',
            ]
            );
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
