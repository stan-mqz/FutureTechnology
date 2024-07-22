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

$criterio = "";

if (isset($_GET["criterio"])) {
    $criterio = $_GET["criterio"];
}

$user_type = "";
$user_status = "";
$contenido = '
<div class="container-fluid">
    <nav class="navbar navbar-light bg-white m-3">
        <div class="container-fluid justify-content-between">
            <h3>Tabla Users</h3>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="criterio" value="' . $criterio . '" style="width: 250px;" autofocus>
                <a href="controlador_agregar.php">
                    <button type="button" class="btn btn-secondary">Nuevo</button>
                </a>
            </form>
        </div>
    </nav>
    
    <center>
        <div class="row d-flex flex-wrap container-fluid">
            <div class="col-md-1 col-sm-1 col-1">
                #
            </div>
            <div class="col-md-2 col-sm-3 col-3">
                Nombre
            </div>
            <div class="col-md-2 col-sm-2 col-4">
                Nombre de usuario
            </div>
            <div class="col-md-2 col-sm-3 col-4">
                Estado
            </div>  
            <div class="col-md-2 col-sm-3 col-6">
                Tipo
            </div>
            <div class="col-md-3 col-sm-3 col-6">
                Herramientas
            </div>
        </div>';

$sql = "SELECT nombre, nombre_usuario, tipo_usuario, estado FROM clientes";

if ($criterio != "") {
    $sql .= " WHERE clientes.nombre LIKE '%" . $criterio . "%'
        OR clientes.nombre_usuario LIKE '%" . $criterio . "%'";
}

$query = $conexion->consultar($sql);

if (mysqli_num_rows($query) > 0) {
    $counter = 1;
    while ($fila = mysqli_fetch_assoc($query)) {
        if ($fila["tipo_usuario"] == 1) {
            $user_type = "Admin";
        } else if ($fila["tipo_usuario"] == 0) {
            $user_type = "Operativo";
        }

        if ($fila["estado"] == 1) {
            $user_status = "Activo";
        } else if ($fila["estado"] == 0) {
            $user_status = "Inactivo";
        }
        $contenido .= '
        <div class="row d-flex flex-wrap container-fluid" style="padding:;">
            <div class="col-md-1 col-sm-1 col-1 bg-dark" style="color: white;">
                ' . $counter . '
            </div>
            <div class="col-md-2 col-sm-3 col-3">
                ' . $fila["nombre"] . '
            </div>
            <div class="col-md-2 col-sm-2 col-4">
                ' . $fila["nombre_usuario"] . '
            </div>
            <div class="col-md-2 col-sm-3 col-4">
                ' . $user_status . '
            </div>  
            <div class="col-md-2 col-sm-3 col-6">
                ' . $user_type . '
            </div>
            <div class="col-md-3 col-sm-12 col-6 bg-light">
                <button type="button" class="btn btn-secondary">Eliminar</button>
                <button type="button" class="btn btn-secondary">Actualizar</button>
                <button type="button" class="btn btn-secondary">Estado</button>
            </div>
        </div>';
        $counter++;
    }
} else {
    $contenido .= "
    <tr>
        <td colspan='6' style='text-align: left;'>NO SE ENCONTRARON REGISTROS</td>
    </tr>";
}

$contenido .= "
    </center>
</div>";

?>

<?php echo $modelo->obtenerHeader($origen); ?>
<?php echo $modelo->obtenerNav($origen); ?>
<?php echo $modelo->obtenerMain($origen, $contenido); ?>
<?php echo $modelo->obtenerFooter($origen); ?>

</body>
</html>
