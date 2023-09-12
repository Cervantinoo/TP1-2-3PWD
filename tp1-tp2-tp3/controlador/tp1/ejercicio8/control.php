<?php

class control
{

    public function verInformacion($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $educacion = $datos['educacion'];

        if ($educacion == "Si"  && $edad > 12) {
            $respuesta = "<h2>Bienvenido $nombre $apellido, su entrada cuesta $180</h2>";
        } elseif ($educacion == "Si" || $edad < 12) {
            $respuesta =  "<h2>Bienvenido $nombre $apellido, su entrada cuesta $160</h2>";
        } else {
            $respuesta =  "<h2>Bienvenido $nombre $apellido, su entrada cuesta $300</h2>";
        }

        return $respuesta;
    }
}
