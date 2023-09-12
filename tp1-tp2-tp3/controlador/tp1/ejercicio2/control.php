
<?php

class control
{
    public function verInformacion($datos)
    {

        $horasLunes = $datos['lunes'];
        $horasMartes = $datos['martes'];
        $horasMiercoles = $datos['miercoles'];
        $horasJueves = $datos['jueves'];
        $horasViernes = $datos['viernes'];
        $arregloHoras = [$horasLunes, $horasMartes, $horasMiercoles, $horasJueves, $horasViernes];

        $suma = 0;
        foreach ($arregloHoras as $total) {
            $suma += intval($total);
        }
        return $suma;
    }
}


?>