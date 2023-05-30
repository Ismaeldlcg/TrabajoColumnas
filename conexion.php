<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE,OPTIONS');

    class Conexion{

        public static function Conectar(){
            define('dbserver','localhost');
            define('dbname','u217481_trello');
            define('dbuser','u217481');
            define('dbpassword','1913833');
           
            $opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
            try{
                $conexion = new PDO("mysql:host=".dbserver."; dbname=".dbname.";",dbuser,dbpassword,$opciones);
                return $conexion;
            }catch(Exception $e){
                die("Erl error al conectar: ".$e->getMessage());
            }
        }
    }
?>