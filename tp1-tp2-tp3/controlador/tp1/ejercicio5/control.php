<?php

class control{

    public function verInformacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $educacion = $datos['educacion']; //Esto toma el valor, seleccionado en el formulario
        $sexo = $datos['genero']; //Esto toma el valor, del genero seleccionado en el formulario.
       //falta verificar que los post no vengan vacios...

       if ($edad >= 18){
        $respuesta = "Hola yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años de edad  
    vivo en " . $direccion  . " ,soy mayor de edad, de genero " . $sexo .  " y tengo " . $educacion;
    }else{
        $respuesta = "Hola yo soy " . $nombre . " " . $apellido . " tengo " . $edad . " años de edad  
        vivo en " . $direccion  . " ,soy menor de edad, de genero " . $sexo .  " y tengo " . $educacion;
    }
    return $respuesta;
    }

}


    
    

?>