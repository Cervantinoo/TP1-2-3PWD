<?php $titulo = "Ejercicio 4 - Tp2" ?>
<?php include_once '../../estructura/encabezado.php'; ?>

<div class="container">
    <h4 class="text-primary">Cinem@as</h4>
    <form name="formulario" id="formulario" class="row g-3" action="action.php" method="post">
        <div class="col-md-6">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="col-md-6">
            <label for="actores" class="form-label">Actores</label>
            <input type="text" class="form-control" id="actores" name="actores">
        </div>
        <div class="col-md-6">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" id="director" name="director">
        </div>
        <div class="col-md-6">
            <label for="guion" class="form-label">Guion</label>
            <input type="text" class="form-control" id="guion" name="guion">
        </div>
        <div class="col-md-6">
            <label for="produccion" class="form-label">Produccion</label>
            <input type="text" class="form-control" id="produccion" name="produccion">
        </div>
        <div class="col-md-2">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" id="anio" name="anio">
        </div>
        <div class="col-md-6">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
        </div>

        <div class="col-md-2 .mt-20">
            <label for="genero" class="form-label">Genero</label>
            <select class="form-select" id="genero" name="genero">
                <option value="accion" name="accion" id="accion">Accion</option>
                <option value="fantasia" name="fantasia" id="fantasia">Fantasia</option>
                <option selected value="comedia" name="comedia" id="comedia">Comedia</option>
                <option value="terror" name="terror" id="terror">Terror</option>
                <option value="romanticas" name="romanticas" id="romanticas">Románticas</option>
                <option value="suspenso" name="suspenso" id="suspenso">Suspenso</option>
                <option value="otras" name="otras" id="otras">Otras</option>
            </select>
        </div>

        <div class="col-md-2"></div>
        <div class="col-md-3">
            <label for="duracion" class="form-label">Duracion (min)</label>
            <input type="text" class="form-control" id="duracion" name="duracion">
        </div>

        <div class="col-md-6 d-flex mt-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="restriccionesEdad" id="todoPublico" value="Todo Publico">
                <label class="form-check-label" for="todoPublico">Todo Publico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="restriccionesEdad" id="mayor7" value="Mayores de 7 años">
                <label class="form-check-label" for="mayor7">Mayores de 7 años</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="restriccionesEdad" id="mayor18" value="Mayores de 18 años">
                <label class="form-check-label" for="mayor18">Mayores de 18 años</label>
            </div>
        </div>



        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input type="submit" class="btn btn-primary me-md-2" value="Enviar">
            <input type="reset" class="btn btn-danger" value="Borrar">
        </div>
    </form>

</div>
<script src="../../js/validar_cinemas.js" defer></script>
<?php include_once '../../estructura/pieDePagina.php'; ?>


