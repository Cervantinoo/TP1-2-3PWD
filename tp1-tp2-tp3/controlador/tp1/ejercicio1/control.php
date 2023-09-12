<?php

class control  {

    public function verInformacion($datos){
        $numero = $datos['numero'];

        if($numero > 0){
            $respuesta = "El numero es positivo";
        }else if($numero < 0){
            $respuesta = "El numero es negativo";
        }else{
            $respuesta = "El numero es Cero";
        }
        return $respuesta;
    }

}
?>