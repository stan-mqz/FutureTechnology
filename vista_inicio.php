<?php
    $contenido = "
        <h2>Este es el menú de inicio</h2>
    ";
?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php echo $modelo->obtenerHead($origen); ?>


</head>

<body>



<?php echo $modelo->obtenerHeader($origen); ?>
<?php echo $modelo->obtenerNav($origen); ?>
<?php echo $modelo->obtenerMain($origen,$contenido); ?>
<?php echo $modelo->obtenerFooter($origen); ?>



</body>

</html>