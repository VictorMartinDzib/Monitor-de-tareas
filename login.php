<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.min.js"> </script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Monitor de Tareas</title>
</head>
<?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       { ?>
          <div id="message" class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Inicio de sesion fallido</strong> El usuario y la contraseña no coinciden!
            <button onclick="location.href='login.php'" type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
       <?php
       }
?>
<body> 

    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo">MONITOR DE TAREAS</h1>
        </div>
            <div id="contenido_id" class="contenido">
                <div class="login">
                    <div id="foto_id">
                    </div>
                    <br>
                    <form action="validacion.php" method="POST">
                        <input name="usuario" id="username" class="form-control" type="text" placeholder="Usuario / Correo electrónico">
                        <br>
                        <input name="contrasenia" id="password" class="form-control" type="password" placeholder="Clave">
                        <br>
                        <button id="acceder" type="submit" class="btn btn-primary">Acceder</button>
                        <button id="cancel" type="button" class="btn btn-danger">Cancelar</button>
                        <br><br>
                        <a id="btn_oc_id" href="">Olvidé mi contraseña</a>
                    </form>
                </div>
            </div>			
    </div>
</body>
</html>