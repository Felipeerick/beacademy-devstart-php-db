<?php

declare(strict_types=1);

namespace App\Controller;
use App\Connection\Connection;
use Dompdf\Dompdf;

Class ProductController extends AbstractController{
  public function listAction():void
  {
    $con = Connection::getConnection();
    $query = "SELECT * FROM products";
    $result = $con->prepare($query);
    $result->execute();

    //var_dump($result->fetch());
     parent::renderProduct("list", $result);
  }

  public function addAction():void
  {

    $con = Connection::getConnection();
    $query = "SELECT * FROM  tb_category";
    $result = $con->prepare($query);
    $result->execute();

    if($_POST)
    {

    $description =  $_POST["description"];
    $nome = $_POST["name"];
   
    $queryForm = "insert into products(name, description) values('{$nome}', '{$description}')";  
    
    $result = $con->prepare($queryForm);
    $result->execute();
    
    parent::renderMessege("Pronto, Adicionado com sucesso!");

  }  
  

   /*  var_dump($result); */
   parent::renderProduct("add", $result);

   
}

  public function editAction():void
  {
    $id = $_GET['id'];

    $con = Connection::getConnection();
   /*  $query = "SELECT * FROM  tb_category";
    $result = $con->prepare($query);
    $result->execute(); */


     $product = $con->prepare("SELECT * FROM products where id='{$id}'");
     $product->execute();

     if($_POST){

      $newName = $_POST['name'];
      $newDesc = $_POST['description'];

      $query = "UPDATE products SET name='{$newName}', description='{$newDesc}' WHERE id='{$id}'; ";

      $result = $con ->prepare($query);
      $result->execute();

      parent::renderMessege("Editado com sucesso!");
  }
     
      
     $result = $product->fetch(\pdo::FETCH_ASSOC);
    parent::renderProduct("edit", $result);

  
  }

  public function removeAction():void
  {
    $con = Connection::getConnection();

      $id = $_GET['id'];

      $query = "DELETE FROM products WHERE id='{$id}'; ";
      $result = $con->prepare($query);
      $result->execute();
   
     parent::renderMessege("Pronto, removido com sucesso!");
  }

  public function reportAction():void{
     
    $con = Connection::getConnection();
    $result = $con->prepare("SELECT * FROM products;");
    $result->execute();
    
    $content = " ";  
    
    while($product = $result->fetch(\PDO::FETCH_ASSOC) ){
      extract($product);
     /*  var_dump($product);
      die(); */
      $content .= "
         <tr>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$description}</td>
            </tr>
      ";
    }

    $html = "<h1>Relatórios de Produtos</h1>
     
    <table border='1' width='100%'>
         <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
              </tr>
         </thead>
           <tbody>
                 {$content}
           </tbody>
    </table>
    ";
    $pdf = new DomPdf();
     $pdf->loadHtml($html);
   
     $pdf->render();
     $pdf->stream();
  }
}