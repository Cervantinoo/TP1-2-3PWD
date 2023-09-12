<?php
Class control{
    public function verInformacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

         $respuesta = "Hola me llamo, ". $nombre . " ".$apellido . " tengo " . $edad . " años" . " y vivo en " . $direccion;
         return $respuesta;
    }
}
?>