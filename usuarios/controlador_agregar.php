<?php

$origen = "..";
$contenido = "";
include $origen."/config/modelo_plantilla.php";
include $origen."/config/conexion.php";
$modelo = new plantilla();
$conexion = new conexionBD();

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


