<?php
$contenido = "
    ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $modelo->obtenerHead($origen); ?>
</head>

<body>
<?php
   
    $contenido = '
    
    
<form class="formulario">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  
  </div>

    <div class="botones__formulario">
    <button type="button" class="btn btn-secondary">Guardar</button>
    
    <a href="controlador_usuarios.php">
        <button type="button" class="btn btn-secondary">Cancelar</button>
    </a>
    
    
    </div>

</form>
    
    
    ';

    ?>

    <?php echo $modelo->obtenerHeader($origen); ?>
    <?php echo $modelo->obtenerNav($origen); ?>
    <?php echo $modelo->obtenerMain($origen, $contenido); ?>
    <?php echo $modelo->obtenerFooter($origen); ?>

</body>

</html>