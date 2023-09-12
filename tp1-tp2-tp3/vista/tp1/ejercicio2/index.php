<?php $titulo = "Ejercicio 2"; ?>
<?php include_once '../../estructura/encabezado.php'; ?>

<div class="container">
        <h2>Cantidad de horas por dia</h2>
        <form action="action.php" method="get" id="form2" name="form2" class=".container-sm">
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Lunes</span>
                <input type="number" id="lunes" name="lunes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="8">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Martes</span>
                <input type="number" id="martes" name="martes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="8">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Miercoles</span>
                <input type="number" id="miercoles" name="miercoles" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="8">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Jueves</span>
                <input type="number" id="jueves" name="jueves" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="8">
            </div>
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Viernes</span>
                <input type="number" id="viernes" name="viernes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="8">
            </div>
            <input type="submit" value="ENVIAR" name="enviar" id="enviar" class="btn btn-primary"><br>


        </form>
    </div>



<?php include_once '../../estructura/pieDePagina.php'; ?>