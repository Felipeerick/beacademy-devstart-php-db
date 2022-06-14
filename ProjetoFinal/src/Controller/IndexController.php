<?php

declare(strict_types=1);

namespace App\Controller;

Class IndexController extends AbstractController{
  public function IndexAction():void
  {
       parent::renderIndex("index");
  }
   
  public function loginAction():void
  {
       parent::renderIndex("login");
  }
}