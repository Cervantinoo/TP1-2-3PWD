<?php

class control{
    public function verInformacion($datos){
        $numA = $datos['numA'];
        $numB = $datos['numB'];
        $opcion = $datos['opciones'];
    
        $suma = $numA + $numB;
        $resta = $numA - $numB;
        $multiplicacion = $numA * $numB;
        $division = $numA / $numB;
        if($opcion == "suma"){
            $respuesta =  "La suma de los numeros es " . $suma;
        }
        if($opcion == "resta"){
            $respuesta =  "La resta de los numeros es " . $resta;
        }
        if($opcion == "multiplicacion"){
            $respuesta =  "La multiplicacion de los numneros es " . $multiplicacion;
        }
        if($opcion == "division"){
            $respuesta =   "La division es " .$division;
        }

        return $respuesta;

    }
}