<?php

$origen = "..";
$contenido = "";
include $origen."/config/modelo_plantilla.php";
include $origen."/config/conexion.php";
$modelo = new plantilla();
$conexion = new conexionBD();

if ($_POST) {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $nivel = $_POST["tipoU"];

    $Verificar = "SELECT clientes.nombre_usuario
                  FROM clientes
                  WHERE clientes.nombre_usuario ='".$usuario."' LIMIT 1";

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
