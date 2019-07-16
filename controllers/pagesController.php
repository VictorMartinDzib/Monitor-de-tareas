<?php
    require_once ROOT_PATH . '/libs/View.php';
    require_once ROOT_PATH . '/libs/Controller.php';

    class PagesController extends Controller{
        public function getDashboard(){
            return new View('users/dashboard_view', ['titulo' => 'Somos la empresa patito SA de CV']);
        }
        public function getActividades(){
            return new View('activitys/add_activity', ['contacto' => 'CONTACTANOS']);
        }
        public function getTarea($user){
            return new View('tareas/add_tarea', ['nombreUsuario']);
        }
        public function getLogin(){
            return new View('login_view');
        }
    }
?>