<?php
class control
{
    public function verInformacion($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $educacion = $datos['educacion']; //Esto toma el valor, seleccionado en el formulario
        $sexo = $datos['genero']; //Esto toma el valor, del genero seleccionado en el formulario.

        $cant = 0;
        if (isset($datos['voley'])) {
            $cant++;
        }
        if (isset($datos['handball'])) {
            $cant++;
        }
        if (isset($datos['tenis'])) {
            $cant++;
        }


        if ($edad >= 18) {
            $respuesta =  " Hola yo soy " . " " . $nombre . " " . $apellido . " " . "tengo " .  $edad . "años de edad  
    vivo en " .  $direccion .  ",soy mayor de edad, de genero " . $sexo . " y tengo " . $educacion . " y hago " . $cant . " deportes";
        } else {
            $respuesta =  " Hola yo soy " . " " . $nombre . " " . $apellido . " " . "tengo " .  $edad . "años de edad  
            vivo en " .  $direccion .  ",soy mayor de edad, de genero " . $sexo . " y tengo " . $educacion . " y hago " . $cant . " deportes";
        }

        return $respuesta;
    }
}
