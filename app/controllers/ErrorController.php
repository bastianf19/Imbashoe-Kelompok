<?php
declare(strict_types=1);

namespace App\Controllers;

class ErrorController extends ControllerBase
{
    public function notFoundAction()
    {
        echo '404 - not found<br>';
        echo $this->tag->linkTo(['/menu', 'Menu', 'class' => 'btn btn-primary']);
    }

    public function serverErrorAction()
    {
        echo 'Server Error<br>';
        echo $this->tag->linkTo(['/', 'Menu', 'class' => 'btn btn-primary']);

    }
}

