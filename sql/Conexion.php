<?php
/*
 * User: Elena Orozco
 * Fecha : 02/05/2016
 */
include "config.php";

class Conexion{
    public static function conectar(){
        try {
            $cn = new PDO ("mysql:host=" .HOST. "; dbname=" .DB, USER, PASSWORD);
            //return $cn;
            echo "Conectado correctamente";
        }catch (PDOException $ex){
            die ($ex-> getMessage());
            echo "Error";
        }
         //echo "Conectado correctamente";
        //return $cn;
    }

}

Conexion::conectar();

?>