<?php
Class control{
    public function verInformacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        if($edad >=18){
            $respuesta = "Hola me llamo, ". $nombre . " ".$apellido . " tengo " . $edad . " años, soy mayor de edad" . " y vivo en " . $direccion;
        }else {
            $respuesta = "Hola me llamo, ". $nombre . " ".$apellido . " tengo " . $edad . " años, soy menor de edad" . " y vivo en " . $direccion;
        }
        
         return $respuesta;
    }
}
?>