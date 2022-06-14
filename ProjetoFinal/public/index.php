<?php

declare(strict_types=1);

ini_set("display_errors", 1);

include("../vendor/autoload.php");

use App\Controller\Error;

$routes = include("../config/routes.php");
//phpinfo();


/* $query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);
$preparacao->execute();
//var_dump($preparacao);

while($registro = $preparacao->fetch()){
      var_dump($registro);
}; */


$url = explode("?",$_SERVER["REQUEST_URI"])[0];

       if(false === isset($routes[$url])){
       (new Error()) -> error404();  
        exit;
};

$controllerName = $routes[$url]["controller"];
$methodName = $routes[$url]["method"];


(new $controllerName) -> $methodName();

//echo $url;