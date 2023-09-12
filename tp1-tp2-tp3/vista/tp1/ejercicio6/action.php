<?php
$titulo = " Ejercicio 6";
include_once("../../estructura/encabezado.php");
include_once("../../../utils/funciones.php");
include_once("../../../controlador/tp1/ejercicio6/control.php");
?>

<?php 
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->verInformacion($datos);
    echo "<p>$respuesta</p>";
?>



<?php include_once '../../estructura/pieDePagina.php'; ?>