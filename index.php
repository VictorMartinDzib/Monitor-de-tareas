<?php 

    define("ROOT_PATH", dirname(__FILE__).'/');
    require_once ROOT_PATH . 'controllers/dashboard_controller.php';
    require_once ROOT_PATH . 'controllers/pagesController.php';
    require_once ROOT_PATH . 'controllers/usuario_controller.php';
    require_once ROOT_PATH . 'controllers/pagesController.php';

    $tareasController = new DashboardController();
    $pagesController = new PagesController();
    $userController = new UsuarioController();

    if(isset($_GET['url'])){
        $pagina = $_GET['url'];

        if($pagina == "dashboard"){

            session_start();
            echo $tareasController -> getIndex($_SESSION['us']);

        }else if($pagina=="tarea"){
            session_start();
            echo $pagesController -> getTarea();

        }else if($pagina=="logea"){
            $userController -> startSession();
        }else if($pagina =="exit"){
            $userController -> closeSession();
        }
        else{
            echo $pagesController -> getLogin();
        }
    }else{
        echo $pagesController -> getLogin();
    }
?>
    
