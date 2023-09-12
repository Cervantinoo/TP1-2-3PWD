<?php

class control{
    public function verificarPassword($datos){

        $usuario = $datos['usuario'];
        $contraseña = $datos['contraseña'];
        $arrayUsuarios = array(
            array("usuario" => "root", "clave" => "Root*1234"),
            array("usuario" => "admin", "clave" => "Admin*1234"),
            array("usuario" => "usuario3", "clave" => "Usuario*5678")
        );
        
        $accesoConcedido = false;
        
        foreach ($arrayUsuarios as $usuarioInfo) {
            if ($usuario === $usuarioInfo['usuario'] && $contraseña === $usuarioInfo['clave']) {
                $accesoConcedido = true;
                break;
            }
        }
        
        if ($accesoConcedido) {
            return "<h1>Bienvenido $usuario</h1>: ";
        } else {
            return "Acceso denegado";
        }
    }
}