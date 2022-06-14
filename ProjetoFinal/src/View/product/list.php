<h1>Listar Produtos</h1>
<div class="mb-3 text-end">
 <a href="/produtos/novo" class='btn btn-outline-dark'>Novo Produto</a>
 <a href="/produtos/relatorio" class="btn btn-outline-dark">Gerar PDF</a>
</div>
<table class='table table-hover table-striped'>
   <thead class="table-dark">
       <th>#id</th>
       <th>Nome</th>
       <th>Descrição</th>
      <!--  <th>Foto</th> -->
       <th>Ações</th>
   </thead>
      <tbody>
           <?php
           while($product = $result->fetch(\pdo::FETCH_ASSOC) ){
                extract($product);
               echo '<tr>'; 
                  echo "<td> {$product["id"]} </td>";
                  echo "<td> {$product["name"]} </td>";
                  echo "<td> {$product["description"]} </td>";
                 /*  echo "<td> <img width='100px' height='100px'src='{$product["photo"]}' > </td>"; */
                  echo "<td>
                   <a href='/produtos/excluir?id={$id}  ' class='btn btn-danger btn-sm '>EXCLUIR</a>
                   <a href='/produtos/edit?id={$id}   ' class='btn btn-warning btn-sm'>EDITAR</a>
                   </td>";
                  echo '</tr>';
           };

           ?>
      </tbody>

</table>