<h1>Editar Categoria</h1>

<form action="" method="POST">
    <label for="name">Nome</label>
    <input value="<?php echo $result['name']; ?>" type="text" name="name" id="name" class="form-control mb-3">

     <label for="description">description</label>
     <textarea id='description' name="description" class="form-control mb-3"> <?php echo $result['description']; ?> </textarea>

       <button type="submit" class="btn btn-primary">Atualizar</button>
</form> 