
<?php
$titulo = " Ejercicio 3";
include_once("../../estructura/encabezado.php");
include_once("../../../utils/funciones.php");
include_once("../../../controlador/tp2/ejercicio3/control.php");
?>

<?php 
    $datos = data_submitted();
    $obj = new control();
    $respuesta = $obj->verificarPassword($datos);
    echo "<p>$respuesta</p>";
?>



<?php include_once '../../estructura/pieDePagina.php'; ?>