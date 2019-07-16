<?php

    require_once ROOT_PATH.'/libs/Controller.php';
    require_once ROOT_PATH.'/libs/View.php';
    require_once ROOT_PATH.'/models/tareas.php';
    
    class TareasController extends Controller
    {
        public function getPanel($user){
            $name = Tarea::getByParam($user);
            $list = Tarea::getUserList($user);

            return new View('tareas/add_tarea', ['name' => $name,
                                                'list' => $list]);
        }

        public function saveValues(){
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try{
                    session_start();
                    $nuevaTarea = new Tarea();
                    $nuevaTarea -> setTitle($_POST['titulo']);
                    $nuevaTarea -> setStartF($_POST['fecha_ini']);
                    $nuevaTarea -> setEndF($_POST['fecha_ven']);
                    $nuevaTarea -> setAssignedBy(Tarea::getID($_SESSION['us']));
                    $nuevaTarea -> setAssignedTo($_POST['asignado']);
                    $nuevaTarea -> setrestD('0');
                    $nuevaTarea -> setDescription($_POST['descripcion']);
                    $nuevaTarea -> setStatus($_POST['estatus']);

                    $nuevaTarea -> setValues();                    
                    header('Location: tarea');
                }catch(Exception $e){
                    echo "Hubo un error";
                    echo $e -> getMessage();
                }
                
                //
            }
        }
    }

?>