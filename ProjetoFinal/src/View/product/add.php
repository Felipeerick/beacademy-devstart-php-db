<h1>Adicionar Produtos</h1>


<form action="" method="POST">


     <label for="category">Categoria</label>
     <select name="category" id="category" class="form-select mb-3">
         <option selected>-- Selecione -- </option>
         <?php
           
           while($category = $result->fetch(\pdo::FETCH_ASSOC) )
           {
            extract($category);
              
             echo "<option value='{$id}'> {$name}</option>";

           }
      ?>        
     </select>

   <!--   
    <label for="id">Id</label>
    <input type="number" name="id" id="id" class="form-control mb-3"> -->
   
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control mb-3">

     <label for="description">description</label>
     <textarea id='description' name="description" class="form-control mb-3"></textarea>

    <!--  <label for="photo">Foto</label>
    <input type="text" name="photo" id="photo" class="form-control mb-3"> -->

       <button type="submit" class="btn btn-primary">Enviar</button>
</form>