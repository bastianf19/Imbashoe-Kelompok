<?php

namespace App\Validation;

use Phalcon\Validation;

use Phalcon\Validation\Validator\PresenceOf;

use Phalcon\Validation\Validator\Numericality;

class ProdukValidation extends Validation
{
    public function initialize()
    {
        $this->add(
            'nama_produk',
            new PresenceOf(
                [
                    'message' => 'Nama Produk harus diisi',
                ]
            )
        );
        $this->add(
            'brand_produk',
            new PresenceOf(
                [
                    'message' => 'Brand Produk harus diisi',
                ]
            )
        );
        $this->add(
            'deskripsi_produk',
            new PresenceOf(
                [
                    'message' => 'Deskripsi Produk harus diisi',
                ]
            )
        );
        $this->add(
            'harga_produk',
            new PresenceOf(
                [
                    'message' => 'Harga Produk harus diisi',
                ]
            )
        );
        // $this->add(
        //     'foto_produk',
        //     new PresenceOf(
        //         [
        //             'message' => 'Foto Produk harus diisi',
        //         ]
        //     )
        // );
        $this->add(
            'kategori',
            new PresenceOf(
                [
                    'message' => 'Kategori Produk harus diisi',
                ]
            )
        );

        $this->add(
            'status_produk',
            new PresenceOf(
                [
                    'message' => 'Status Produk harus diisi',
                ]
            )
        );
    }
}