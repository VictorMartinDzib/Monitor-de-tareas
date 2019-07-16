<?php 

    define("ROOT_PATH", dirname(__FILE__).'/');
    require_once ROOT_PATH . 'controllers/dashboard_controller.php';
    require_once ROOT_PATH . 'controllers/pagesController.php';
    require_once ROOT_PATH . 'controllers/usuario_controller.php';
    require_once ROOT_PATH . 'controllers/pagesController.php';
    require_once ROOT_PATH . 'controllers/tareasController.php';
    require_once ROOT_PATH . 'controllers/tareasController.php';
    require_once ROOT_PATH . 'controllers/actividadesController.php';

    $tareasController = new DashboardController();
    $pagesController = new PagesController();
    $userController = new UsuarioController();
    $tareaController = new TareasController();
    $actividadController = new ActividadesController();



    if(isset($_GET['url'])){
        $pagina = $_GET['url'];

        if($pagina == "dashboard"){

            session_start();
            echo $tareasController -> getIndex($_SESSION['us']);

        }else if($pagina=="tarea"){

            session_start();
            echo $tareaController -> getPanel($_SESSION['us']);

        }else if($pagina=="logea"){
            $userController -> startSession();
        }else if($pagina =="exit"){
            $userController -> closeSession();
        }else if($pagina == "save"){
            $tareaController -> saveValues();
        }else if($pagina == "ActualTask"){
        
            echo $actividadController -> getListActivity();
        }
        else{
            echo $pagesController -> getLogin();
        }
    }else{
        echo $pagesController -> getLogin();
    }
?>
    
