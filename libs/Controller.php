<?php
    require_once ROOT_PATH.'/libs/View.php';

    abstract class Controller{

        public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
            header("Location:index.php?controller=".$controlador."&action=".$accion);
        }    
        
    }

?>