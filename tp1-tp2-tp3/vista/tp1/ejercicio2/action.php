
<?php
$titulo = " Ejercicio 2";
include_once("../../estructura/encabezado.php");
include_once("../../../utils/funciones.php");
include_once("../../../controlador/tp1/ejercicio2/control.php");
?>

<?php
        $datos = data_submitted();
        $obj = new control();
        $respuesta = $obj->verInformacion($datos) . "<br><br> ";
?>

<p>
            <b>Respuesta: </b>
            <?php echo $respuesta ?>
        </p>

 
<?php
include_once '../../estructura/pieDePagina.php'
?>