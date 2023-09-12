<?php $titulo = "Ejercicio 3 - Tp2" ?>
<?php include_once '../../estructura/encabezado.php'; ?>



<div class="container">
    <button type="button" class="btn-close" aria-label="Close"></button>
    <h2>Iniciar Sesion</h2>
    <form id="miFormulario" action="action.php" method="post" class="needs-validation" novalidate>
        <div class="input-group mb-3">
            <span class="input-group-text " id="basic-addon1"><img src="../../img/img_user.jpg" alt="" srcset=""></span>
            <input id="usuario" name="usuario" type="text" class="form-control" pattern="^[a-zA-Z0-9]*$" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <span id="mensajeError"></span>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="../../img/candado_pass.jpg" alt="" srcset=""></span>
            <input id="contraseña" name="contraseña" type="password" class="form-control" placeholder="*******" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <span id="mensajePass"></span>


        <button type="submit" class="btn btn-success col-12">Login</button>
    </form>

</div>

<style>
    h2 {
        text-align: center;
    }

    img {
        width: 20px;
        height: 20px;
    }

    span {
        font-size: small;
        color: red;
    }

    .container {
        width: 33em;
        height: 20em;
        background-color: lightgray;
    }

    button {
        float: right;
    }
</style>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<?php include_once '../../estructura/pieDePagina.php'; ?>
<script src="../../js/script.js"></script>