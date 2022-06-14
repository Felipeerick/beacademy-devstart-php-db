<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

function createRoute(string $controller, string $method){
    return[
     "controller" => $controller,
      "method" => $method
    ];
 };


 $routes = [
    "/" =>  createRoute(IndexController::class, "indexAction"),
  
    "/produtos" => createRoute(ProductController::class, "listAction"),
  
     "/produtos/novo" => createRoute(ProductController::class, "addAction"),
  
     "/produtos/edit" => createRoute(ProductController::class, "editAction"),
      
        "/produtos/excluir" => createRoute(ProductController::class, "removeAction") ,
       
         "/produtos/relatorio"  => createRoute(ProductController::class, "reportAction"),

      "/login" => createRoute(IndexController::class, "loginAction"),
  
   "/categorias" => createRoute(CategoryController::class, "listCategoryAction"),
  
   "/categorias/editar" => createRoute(CategoryController::class, "editCategoryAction"),
  
   "/categorias/adicionar" => createRoute(CategoryController::class, "CategoryAddAction"),

   "/categorias/excluir" => createRoute(CategoryController::class, "removeAction"),

          ];
  
         


  return $routes;