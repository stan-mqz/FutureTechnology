<?php
$contenido = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $modelo->obtenerHead($origen); ?>
</head>

<body>
<?php

$contenido = '
<form method="POST" action="' . $_SERVER['PHP_SELF'] . '" enctype="multipart/form-data" onsubmit="" class="formulario">
<input type="hidden" name="id_usuario" value="'.$id_usuario.'">  
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" value="'.$nombre.'">
  </div>

  <div class="mb-3">
    <label for="nombre_usuario" class="form-label">Nombre de usuario</label>
    <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario"  value="'.$usuario.'">
  </div>

  <div class="mb-3">
    <label for="tipoU" class="form-label">Tipo</label>
    ' .$cmbNiveles. '
  </div>

  <div class="botones__formulario">
    <button type="submit" class="btn btn-secondary">Guardar</button>
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