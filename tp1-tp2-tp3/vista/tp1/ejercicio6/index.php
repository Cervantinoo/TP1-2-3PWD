<?php $titulo = "Ejercicio 6" ?>
<?php include_once '../../estructura/encabezado.php'; ?>

<form action="action.php" method="post" id="form5" name="form5" class="needs-validation" novalidate>
        <h2>Datos personales</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
            <input type="text" id="nombre" name="nombre"  class="form-control"  required>
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
                <legend>Estudios:</legend>

                <input class="form-check-input" type="radio" id="sinEstudios" name="educacion" value="Sin estuidos" required />
                <label for="sinEstudios">Sin estudiuos</label>

                <input class="form-check-input" type="radio" id="primario" name="educacion" value="Estudios Primarios" required />
                <label for="primario">Educacion Primaria</label>

                <input class="form-check-input"  type="radio" id="secundario" name="educacion" value="Estudios Secundarios" required/>
                <label for="secundario">Eduacion Secundaria</label>
            </fieldset>
        </div>

        <label for="genero">Genero:</label>
        <select name="genero" class="form-select form-control" aria-label="Default select example" required>
            <option value="" selected disabled=true>Por favor seleccion una…</option>
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
            <option value="no-binario">No-binario</option>
            <option value="otro">Otra</option>
            <option value="no-responder">Perfiero no responder</option>
        </select>
        <br>

        <div>
            <label for="deporte">¿Qué deportes prácticas?</label>
            <div>
                <input  class="form-check-input" type="checkbox" name="handball" id="handball" value="handball">
                <label for="handball">Handball</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="voley" id="voley" value="voley">
                <label for="voley">Voley</label>
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="tenis" id="tenis" value="tenis">
                <label for="tenis">Tenis</label>
            </div>
        </div>
        <button type="submit" name="enviar" id="enviar" class="btn btn-primary">Enviar</button>


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
