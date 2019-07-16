<?php
    require_once ROOT_PATH.'/libs/View.php';
    require_once ROOT_PATH.'/libs/Model.php';

    abstract class Controller extends Model{

        public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
            header("Location:index.php?controller=".$controlador."&action=".$accion);
        }    
        
    }

?>