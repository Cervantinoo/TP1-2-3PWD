<?php $titulo = "Ejercicio 4" ?>
<?php include_once '../../estructura/encabezado.php'; ?>

<h2>Datos personales</h2>
<form action="action.php" method="post" id="form3" name="form3" class=".container-sm">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        <input type="text" id="nombre" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
        <input type="text" id="apellido" name="apellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Edad</span>
        <input type="number" id="edad" name="edad" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="999">
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
        <input type="text" id="direccion" name="direccion" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>

    <input type="submit" value="ENVIAR" name="enviar" id="enviar" class="btn btn-success"><br>
</form>


<?php include_once '../../estructura/pieDePagina.php'; ?>