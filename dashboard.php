
<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: dashboard.php');
}

require_once('baseDatos.php');
$bd = BaseDeDatos::getInstancia();
$conexion = $bd -> getConexion();

$current_id = $_SESSION['idUser'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estiloDash.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Monitor de Tareas</title>
</head>

<body>
    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo">MONITOR DE TAREAS</h1>

            <h3> <?php 
                    echo $_SESSION['nombreCompleto'];
                ?> 
            <button onclick="location.href='cierreSesion.php'" type="button" class="btn btn-secondary">Salir</button></h3>
        </div>
        <div id="contenido_id" class="contenido">
            <div class="txt_btn">
                <h4 class="title1">Tareas vencidas </h4>

                <button onclick="location.href='formulario.php'"
                 id="btn_agregar_id" type="button"
                    class="btn btn-success">Agregar Tarea</button>
            </div>
            <br>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tarea</th>
                        <th scope="col">Asignado por</th>
                        <th scope="col">Fecha Vencimiento</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sentencia = "SELECT id_tarea, titulo, nombre_Apellido , fecah_venc FROM tareas 
                        INNER JOIN usuarios ON usuarios.id_usuario = tareas.id_asignador 
                        WHERE (fecah_venc < CURRENT_DATE) AND (id_user_asignado = '$current_id') AND 
                        (tareas.estatus = 1) ORDER BY id_tarea";

                        $consulta_dos = $conexion -> prepare($sentencia);
                        $consulta_dos -> execute();
                        $cont = 1;
                        while($fila = $consulta_dos -> fetch()){     ?>
                        <tr>
                            <th scope="row"><?php echo $cont++; ?></th>
                            <td><?php echo $fila['titulo']; ?></td>
                            <td><?php echo $fila['nombre_Apellido']; ?></td>
                            <td><?php echo $fila['fecah_venc']; ?></td>
                            <td> <button onclick="location.href='eliminarTarea.php?id_elim=<?php echo $fila['id_tarea']?>'" type="button" class="btn btn-danger">X</button></td>
                           
                        </tr>
                        <?php
                        } 
                        ?>
                </tbody>
            </table><br>
            
            <h4>Tareas por realizar</h4><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tarea</th>
                        <th scope="col">Asignado por</th>
                        <th scope="col">Fecha Vencimiento</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                        <?php                        
                        $sentencia = "SELECT id_tarea, titulo, nombre_Apellido , fecah_venc FROM tareas 
                        INNER JOIN usuarios ON usuarios.id_usuario = tareas.id_asignador 
                        WHERE (id_user_asignado = '$current_id') AND 
                        (tareas.estatus = 1) ORDER BY id_tarea";

                        $consulta_dos = $conexion -> prepare($sentencia);
                        $consulta_dos -> execute();
                        
                        $datos = array();
                        //$_SESSION['Vencimiento'] = null;
                       
                        $cont = 1;
                        while($fila = $consulta_dos -> fetch()){ ?>
                       
                        <tr>
                        <?php  
                            //$_SESSION['Tarea'] = $fila['titulo'];
                            //$_SESSION['Vencimiento'] = $fila['fecah_venc'];
                            $datos[$cont-1] = $fila['titulo'];
                            echo $datos[$cont-1];  ?>
                            <th scope="row"><?php echo $cont++; ?></th>
                            <td><?php echo $fila['titulo']; ?></td>
                            <td><?php echo $fila['nombre_Apellido']; ?></td>
                            <td><?php echo $fila['fecah_venc']; ?></td>
                            <td>
                            <form action="seguimiento.php" method="POST">
                                <input name="title" type="text" value="<?php echo $fila['titulo'];  ?>" style="display: none">
                                <input name="fechaFin" type="text" value="<?php echo $fila['fecah_venc'];  ?>" style="display: none">
                            <button type="submit" class="btn btn-info">Ver</button></form></td>                         
                        </tr>
                        <?php
                        }
                        $_SESSION['tareas'] = $datos;
                    ?>
                </tbody>
            </table><br>

            <h4>Tareas asignadas a otros</h4><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tarea</th>
                        <th scope="col">Asignado a</th>
                        <th scope="col">Fecha Vencimiento</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sentencia = "SELECT id_tarea, titulo, nombre_Apellido , fecah_venc FROM tareas 
                        INNER JOIN usuarios ON usuarios.id_usuario = tareas.id_user_asignado
                        WHERE id_asignador = '$current_id' AND 
                        (tareas.estatus = 1) ORDER BY id_tarea";

                        $consulta_tres = $conexion -> prepare($sentencia);
                        $consulta_tres -> execute();

                        $cont = 1;
                        while($fila = $consulta_tres -> fetch()){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $cont++; ?></th>
                        <td><?php echo $fila['titulo']; ?></td>
                        <td><?php echo $fila['nombre_Apellido']; ?></td>
                        <td><?php echo $fila['fecah_venc']; ?></td>
                        <td>
                            <button onclick="location.href='formulario.php'" type="button" class="btn btn-primary">Editar</button>
                            <button onclick="location.href='eliminarTarea.php?id_elim=<?php echo $fila['id_tarea']?>'" type="button" class="btn btn-danger">X</button>
                        </td>
                    </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
