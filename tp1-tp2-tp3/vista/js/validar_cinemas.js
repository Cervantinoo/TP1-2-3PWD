
$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            titulo: "required",
            actores: "required",
            produccion: "required",
            director: "required",
            guion: "required",
            anio: {
                number: true,
                required: true,
                minlength: 4,
                min: 1900,
                max: 2023
            },
            nacionalidad: "required",
            genero: "required",
            duracion: {
                number: true,
                required: true,
                maxlength: 3,
                min: 0,
            },
            restriccionesEdad: "required"
        },
        messages: {
            titulo: "Ingrese el titulo", 
            actores: "Ingrese el actor",
            produccion: "Ingrese la produccion",
            director: "Ingrese el director",
            guion: "Ingrese el guion",
            anio:{
                number: "El año debe ser un numero",
                required: "Ingrese el año",
                minlength: "La longitud minima es 4 caracteres",
                min: "El año debe ser mayor a 1900",
                max: "El año no puede ser mayor al actual",
            }, 
            duracion: {
                number: "La duracion debe ser un numero",
                required: "Ingrese la duracion",
                maxlength: "La pelicula dura mucho",
                min: "Debe durar por lo menos 1 minuto",
            },
            nacionalidad: "Ingrese una nacionalidad",
            restriccionesEdad: "Ingrese 1 opcion",
        }
    });
});