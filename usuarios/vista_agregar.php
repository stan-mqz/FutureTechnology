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
    <div class ="botond">
    <label for="exampleInputEmail1" class="form-label">Tipo</label>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Elegir Tipo
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Administrador</a></li>
    <li><a class="dropdown-item" href="#">Operativo</a></li>
    </div>
  </ul>
</div>
    
  </div>
  
  </div>

    <div class="botones__formulario">
    <button type="button" class="btn btn-secondary">Guardar</button>
    
    <a href="controlador_usuarios.php">
        <button type="button" class="btn btn-secondary">Cancelar</button>
    </a>
    
    
    </div>

</form>
    
<!-- <script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.js"></script> -->
    
    ';

    ?>

    <?php echo $modelo->obtenerHeader($origen); ?>
    <?php echo $modelo->obtenerNav($origen); ?>
    <?php echo $modelo->obtenerMain($origen, $contenido); ?>
    <?php echo $modelo->obtenerFooter($origen); ?>

</body>

</html>