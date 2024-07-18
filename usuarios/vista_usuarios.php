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
    $contenido .= '
        <div>
        <nav class="navbar navbar-light bg-white m-3">
            <div class="container-fluid justify-content-between">
                <h3>Tabla Usuarios</h3>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="criterio" value="' . $criterio . '" style="width: 250px;" autofocus>
                    <button class="btn btn-outline-success" type="submit" value="Buscar">Search</button>
                </form>
            </div>
        </nav>
        
        <table class="table table-bordered table-ligth table-responsive">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nombre de usuario</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Herramientas</th>
                </tr>
            </thead>
            <tbody> 
            ';

    $sql = "SELECT nombre, nombre_usuario, tipo_usuario, estado FROM clientes";

    if ($criterio != "") {
        $sql .= " WHERE nombre LIKE '%" . $criterio . "%' OR nombre_usuario LIKE '%" . $criterio . "%'";
    }

    $query = $conexion->consultar($sql);

    if (mysqli_num_rows($query) > 0) {
        $counter = 1;
        while ($fila = mysqli_fetch_assoc($query)) {

            if ($fila["tipo_usuario"] == "1") {
                $user_type = "Admin";
            } else if ($fila["tipo_usuario"] == "0") {
                $user_type = "Operativo";
            }

            if ($fila["estado"] == "1") {
                $user_status = "Activo";
            } else if ($fila["estado"] == "0") {
                $user_status = "Inactivo";
            }

            $contenido .= '
                <tr>
                    <th scope="row">' . $counter . '</th>
                    <td>' . $fila["nombre"] . '</td>
                    <td>' . $fila["nombre_usuario"] . '</td>
                    <td>' . $user_status . '</td>
                    <td>' . $user_type . '</td>
                    <td>
                    <a href="controlador_agregar.php">

                        <button type="button" class="btn btn-secondary">Nuevo</button>
                        <button type="button" class="btn btn-secondary">Eliminar</button>
                        
                    </a>
              
                    </td>
                </tr>';

            $counter++;
        }
    } else {
        $contenido .= "
                <tr>
                    <td colspan='5' style='text-align: left;'>NO SE ENCONTRARON REGISTROS</td>
                </tr>";
    }

    $contenido .= '
            </tbody>
        </table>
    </div>';

    ?>

    <?php echo $modelo->obtenerHeader($origen); ?>
    <?php echo $modelo->obtenerNav($origen); ?>
    <?php echo $modelo->obtenerMain($origen, $contenido); ?>
    <?php echo $modelo->obtenerFooter($origen); ?>

</body>

</html>