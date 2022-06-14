<?php

declare(strict_types=1);

namespace App\Controller;

  abstract class AbstractController{
      public function renderIndex(string $IndexName):void
      {
        include("../src/View/_partials/head.php");
        include ("../src/View/index/{$IndexName}.php");
        include("../src/View/_partials/footer.php");
      }

      public function renderProduct(string $ProductName, $result = null):void
      {
        include("../src/View/_partials/head.php");
        include("../src/View/product/{$ProductName}.php");
        include("../src/View/_partials/footer.php");
      }

      //se colocar o parametro = null, o parametro se torna opcional
      public function renderCategory(string $Categoryname, $result = null):void
      {
        include("../src/View/_partials/head.php");
        include ("../src/View/Category/{$Categoryname}.php");
        include("../src/View/_partials/footer.php");
      }

      public function renderErro(string $error):void{
        include("../src/View/_partials/head.php");
        include "../src/View/erro404/{$error}.php";
        include("../src/View/_partials/footer.php");
      }

      public function renderMessege(string $messege):void
      {
        include("../src/View/_partials/head.php");
        include("../src/View/_partials/messege.php");
        include("../src/View/_partials/footer.php");
      }
    }