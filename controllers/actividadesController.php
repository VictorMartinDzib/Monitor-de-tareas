<?php

require_once ROOT_PATH.'/libs/Controller.php';
require_once ROOT_PATH.'/libs/View.php';
require_once ROOT_PATH.'/models/usuario.php';

    class ActividadesController extends Controller{

        public function getListActivity(){
            $tareaActual = Actividad::allTask();

            return new View('tareas/actividades_view');
        }
    }

?>