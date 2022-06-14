<?php

declare(strict_types=1);

namespace App\Controller;

class Error extends AbstractController{

    public function error404(){
        parent::renderErro("erro");
    }
}