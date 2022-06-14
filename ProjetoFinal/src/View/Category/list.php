<h1>Listar Categorias</h1>

<div class="mb-3 text-end">
<a href="/categorias/adicionar" class="btn btn-outline-dark">Adicionar Categoria</a>
</div>
<table class='table table-hover table-striped'>
   <thead class="table-dark">
       <th>#id</th>
       <th>Nome</th>
       <th>Descrição</th>
       <th>Ações</th>
   </thead>
      <tbody>
           <?php
           while($category = $result->fetch(\pdo::FETCH_ASSOC) ){
                extract($category);
               echo '<tr>';
                  echo "<td> {$category["id"]} </td>";
                  echo "<td> {$category["name"]} </td>";
                  echo "<td> {$category["description"]} </td>";
                  echo "<td>
                   <a href='/categorias/excluir?id={$id}  ' class='btn btn-danger btn-sm '>EXCLUIR</a>
                   <a href='/categorias/editar?id={$id}   ' class='btn btn-warning btn-sm'>EDITAR</a>
                   </td>";
                  echo '</tr>';
           };

           ?>
      </tbody>

</table>