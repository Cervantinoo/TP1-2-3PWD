<?php $titulo="Ejercicio 1"?>
<?php include_once '../../estructura/encabezado.php'; ?>


<main class="container"> 
<h1>Verificar Número</h1>
    <form action="action.php" method="post">
        Ingrese un número: <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
    </main>
<?php include_once '../../estructura/pieDePagina.php'; ?>