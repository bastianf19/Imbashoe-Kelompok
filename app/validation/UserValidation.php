<?php

namespace App\Validation;

use Phalcon\Validation;

use Phalcon\Validation\Validator\PresenceOf;

use Phalcon\Validation\Validator\Numericality;

class UserValidation extends Validation
{
    public function initialize()
    {
        $this->add(
            'username',
            new PresenceOf(
                [
                    'message' => 'Username harus diisi',
                ]
            )
        );
        $this->add(
            'nama',
            new PresenceOf(
                [
                    'message' => 'Nama User harus diisi',
                ]
            )
        );
        $this->add(
            'email',
            new PresenceOf(
                [
                    'message' => 'Email User harus diisi',
                ]
            )
        );
        $this->add(
            'pass',
            new PresenceOf(
                [
                    'message' => 'Password User harus diisi',
                ]
            )
        );
        
        $this->add(
            'no_hp',
            new PresenceOf(
                [
                    'message' => 'Nomor HP User harus diisi',
                ]
            )
        );
    }
}
