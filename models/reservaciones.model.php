<?php
    require_once "conexion.php";


    
    
    class modeloReservaciones
    {
        static public function mdlMostrarReservaciones(){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM audiovisuales.view_reservation_full_data");
            $stmt  ->execute();

            return $stmt->fetchAll();
            $stmt = null;

        }
    }

    $reservaciones = modeloReservaciones::mdlMostrarReservaciones();
    print_r($reservaciones);
?>