<?php

$origen = "..";
$contenido = "";
include $origen . "/config/modelo_plantilla.php";
include $origen . "/config/conexion.php";
$modelo = new plantilla();
$conexion = new conexionBD();

$id_usuario = "";
$nombre = "";
$usuario = "";

if (isset($_GET["idU"])) {
    $id_usuario = $_GET["idU"];

    $sqlQuery = "SELECT * FROM clientes WHERE clientes.id='" . $id_usuario . "'";

    $queryDatos = $conexion->consultar($sqlQuery);

    if (mysqli_num_rows($queryDatos) > 0) {
        $registro = mysqli_fetch_assoc($queryDatos);
        $nombre = $registro["nombre"];
        $usuario = $registro["nombre_usuario"];
    }
}

if ($_POST) {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["nombre_usuario"];
    $nivel = $_POST["tipoU"];
    $id_usuario = $_POST["id_usuario"];

    if ($id_usuario == "") {
        $Verificar = "SELECT clientes.nombre_usuario FROM clientes WHERE clientes.nombre_usuario ='" . $usuario . "' LIMIT 1";
        $ConsultaExiste = $conexion->consultar($Verificar);

        if (mysqli_num_rows($ConsultaExiste) == 0) {
            $Agregar = "INSERT INTO clientes (
                                        nombre,
                                        nombre_usuario,
                                        tipo_usuario,
                                        estado
                                        )
                        VALUES (
                                '$nombre',
                                '$usuario',
                                '$nivel',
                                '1'
                                )";

            // Ejecutar la consulta
            if ($conexion->consultar($Agregar)) {
                echo "
                <script>
                    alert('Registro exitoso');
                    window.top.location.replace('controlador_usuarios.php');
                </script>";
            } else {
                echo "
                <script>
                    alert('Error');
                    window.top.location.replace('controlador_usuarios.php');
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Usuario ya registrado');
                window.top.location.replace('controlador_usuarios.php');
            </script>";
        }
        $conexion->cerrar();


    } else if ($id_usuario != "") {//AAa


        $Modificar = "UPDATE clientes SET nombre = '$nombre',
        nombre_usuario = '$usuario',
        tipo_usuario = '$nivel' 
        
        WHERE id = '$id_usuario'";

        

            // Ejecutar la consulta
            if ($conexion->consultar($Modificar)) {
                echo "
                    <script>
                    alert('Actualización exitosa');
                    window.top.location.replace('controlador_usuarios.php');
                    </script>";
                            } else {
                                echo "
                    <script>
                    alert('Error');
                    window.top.location.replace('controlador_usuarios.php');
                    </script>";
        }
    }
}

$nTipos = array("1", "0");
$aLetrasNiveles = array("Administrador", "Operativo");

$cmbNiveles = "<select name='tipoU' style='width: 200px;' onChange=\"\">";
$contador = 0;

foreach ($nTipos as $item) {
    $cmbNiveles .= "<option value='" . $item . "'>" . $aLetrasNiveles[$contador] . "</option>";
    $contador++;
}

$cmbNiveles .= "</select>";

include "./vista_agregar.php";

