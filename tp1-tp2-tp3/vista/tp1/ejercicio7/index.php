<?php $titulo = "Ejercicio 7" ?>
<?php include_once '../../estructura/encabezado.php'; ?>

<form action="action.php" method="get" id="form" name="form">
        <input type="text" name="numA" id="numA">
        <input type="text" name="numB" id="numB">
        <select name="opciones" id="opciones">
            <option value="suma" name="suma" id="suma">SUMA</option>
            <option value="resta" name="resta" id="resta">RESTA</option>
            <option value="multiplicacion" name="multiplicacion" id="multiplicacion">MULTIPLICACION</option>
            <option value="division" name="division" id="division">DIVISION</option>
        </select>
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    </form>

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