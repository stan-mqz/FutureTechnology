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

<?php
    $contenido = "
    <center>
        <br><br><br><br><br>
        <h1>Hello world</h1>
        <br><br><br><br><br>
    </center>";
    ?>

<?php echo $modelo->obtenerHeader($origen); ?>
<?php echo $modelo->obtenerNav($origen); ?>
<?php echo $modelo->obtenerMain($origen,$contenido); ?>
<?php echo $modelo->obtenerFooter($origen); ?>



</body>

</html>