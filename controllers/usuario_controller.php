<?php

require_once ROOT_PATH.'/libs/Controller.php';
//require_once ROOT_PATH.'/libs/View.php';
require_once ROOT_PATH.'/models/usuario.php';
//require_once ROOT_PATH.'/controllers/pagesController.php';

    class UsuarioController extends Controller{

        public function startSession(){
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $usuario = htmlentities(addslashes($_POST['usuario']));
                $contra = htmlentities(addslashes($_POST['contrasenia']));

                $current_user = new Usuario($usuario, $contra);
                $acceso = $current_user -> login();

                if($acceso)
                {
                    session_start();
                    $_SESSION['us'] = $_POST['usuario'];
                    header('Location: dashboard');

                }else{
                    header('Location: index');
                }
            }
        }

        public function closeSession(){
            session_start();
            session_destroy();
            header('Location: index');
        }
    }
?>



<?php

    //$startSession = new UsuarioController();
    //$startSession -> startSession();

/*
    require_once('../models/usuario.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $usuario = htmlentities(addslashes($_POST['usuario']));
        $contra = htmlentities(addslashes($_POST['contrasenia']));

        $current_user = new Usuario($usuario, $contra);
        $acceso = $current_user -> login();
        
        if($acceso)
        {
            session_start();
            $_SESSION['num'] = $_POST['usuario'];
            //header("Location: ../views/users/dashboard_view.php");
            header("Location: ../controllers/dashboard_controller.php");

        }else{
            header("Location: ../index.php");
        }
    }
    */
?>