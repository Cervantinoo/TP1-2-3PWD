<?php

class control{

    public function verInformacion($datos){      
    $titulo = $datos["titulo"];
    $actores = $datos["actores"];
    $director = $datos["director"];
    $guion = $datos["guion"];
    $produccion = $datos["produccion"];
    $anio = $datos["anio"];
    $nacionalidad = $datos["nacionalidad"];
    $genero = $datos["genero"];
    $duracion = $datos["duracion"];
    $restriccion = $datos["restriccionesEdad"];

    $respuesta = "Titulo: " . $titulo . "<br>" . 
    " Actores: ". $actores . "<br>" . 
    " Director: " . $director . "<br>" . 
    " Guion: " . $guion . "<br>" . 
    " Produccion: " . $produccion ."<br>" . 
    " Año: " .$anio . "<br>" . 
    " Nacionalidad: " .$nacionalidad . $genero ."<br>" . 
    " Duracion: " .$duracion . "<br>" . 
    " Restriccion de edad: " .$restriccion;
    return $respuesta;
    }
}