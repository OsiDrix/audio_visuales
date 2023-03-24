<?
    
    require_once "../controllers/reservacionesController.php";
    require_once "../models/reservaciones.models.php";

    class ajaxReservaciones
    {
        public function mostrarReservaciones()
        {
            $response = ControladorReservaciones::ctrMostrarReservaciones();
            echo json_encode($response);
        }
    }
    

?>