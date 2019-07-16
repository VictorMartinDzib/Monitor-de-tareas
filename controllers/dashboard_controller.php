
<?php


require_once ROOT_PATH.'/libs/Controller.php';
require_once ROOT_PATH.'/libs/View.php';
require_once ROOT_PATH.'/models/tareas.php';

    class DashboardController extends Controller{
        
        public function getIndex($idUser){
            $tarea1 = Tarea::all(1, $idUser);
            $tarea2 = Tarea::all(2, $idUser);
            $tarea3 = Tarea::all(3, $idUser);

            // a la vista le indicamos el html y los registros de la consulta
            return new View('users/dashboard_view', 
            ['tarea1' => $tarea1,
             'tarea2' => $tarea2,
             'tarea3' => $tarea3]);
        }
    }


?>




