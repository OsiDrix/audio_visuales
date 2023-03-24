<?php 

    class Conexion
    {
        private $host = "localhost";
        private $user = "root";
        private $password = "Samuel@101988**";
        private $database = "audiovisuales";
        static public function conectar()
        {
            $con = new PDO("mysql:host=localhost;dbname=audiovisuales",
                            "root",
                            "Samuel@101988**",
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $con;
        }
    }
    
?>