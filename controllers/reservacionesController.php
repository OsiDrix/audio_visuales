<?php 

    
    
    class ControladorReservaciones
    {
        static public function ctrMostrarReservaciones()
        {
           $response =  modeloReservaciones::mdlMostrarCategoria();
           return $response;
        }
    }
    

?>