<?php $titulo = "Ejercicio 8" ?>
<?php include_once '../../estructura/encabezado.php'; ?>


<form action="action.php" method="post" id="form5" name="form5" class="needs-validation" novalidate>
    <h2>Datos personales</h2>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
        <div class="valid-feedback">
            Looks good!
        </div>

    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Apellido</span>
        <input type="text" id="apellido" name="apellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Edad</span>
        <input type="number" id="edad" name="edad" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" min="0" max="999" required>
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
        <input type="text" id="direccion" name="direccion" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>

    </div>


    <div>
        <fieldset>
            <legend>¿Sos estudiante?</legend>

            <input class="form-check-input" type="radio" id="sinEstudios" name="educacion" value="Si" required />
            <label for="sinEstudios">Si</label>

            <input class="form-check-input" type="radio" id="primario" name="educacion" value="No" required />
            <label for="primario">No</label>

        </fieldset>
    </div>

    <button type="submit" name="enviar" id="enviar" class="btn btn-primary">Calcula costo</button>


</form>

<?php include_once '../../estructura/pieDePagina.php'; ?>

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