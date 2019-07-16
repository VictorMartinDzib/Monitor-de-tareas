<?php
 
    require_once ROOT_PATH . '/models/usuario.php';

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
            //header("Location: ../views/users/dashboard_view.php");
            header("Location: dashboard");

        }else{
            header("Location: index");
        }
    }
?>