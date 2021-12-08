<?php

class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("mysql", "root", "gaspar123", "mi_db");
        return $conexion;
    }
}
