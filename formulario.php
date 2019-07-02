<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header('Location: login.php');
    } 

    /** Recuperando conexion a base de datos */
    require_once('baseDatos.php');
    $bd = BaseDeDatos::getInstancia();
    $conexion = $bd -> getConexion();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estiloDT.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <title>Monitor de Tareas</title>
    
</head>

<body>
    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo" >MONITOR DE TAREAS</h1>
            <h3> <?php echo $_SESSION['nombreCompleto']; ?><button onclick="location.href='cierreSesion.php'" type="button" class="btn btn-secondary">Salir</button></h3>
        </div>
       
        <div id="contenido_id" class="contenido">
            <form action="guardarDatos.php" method="POST">
                <p>Detalles de las tareas  
                    <button onclick="location.href='guardarDatos.php'" id="btn_terminar_id" type="submit"
                    class="btn btn-success">Terminar</button><a class="btn btn-light" href="dashboard.php">ir a Dashboard</a></p>
                <table>
                    <tr>
                        <td> <label for="tarea_id">Tarea:</label></td>
                        <td> <input name="titulo" id="tarea_id" class="form-control" type="text" placeholder="Ejemplo tarea"></td>
                    </tr>
                    <tr>
                        <td><label for="fecha_id">Fecha de creación:</label></td>
                        <td><input name="fecha_ini" id="fecha_id" class="form-control" type="date" placeholder="Ejemplo tarea"></td>
                    </tr>
                    <tr>
                        <td><label for="fechav_id">Fecha de vencimiento:</label></td>
                        <td><input name="fecha_ven" id="fechav_id" class="form-control" type="date" placeholder="Ejemplo tarea">
                            </td>
                    </tr>
                    <tr>
                        <td><label for="diasf_id">Dias faltantes:</label></td>
                        <td><input name="dias_faltantes" id="diasf_id" class="form-control" type="text" placeholder="0" disabled></td>
                    </tr>
                    <script>

                        //var fecha1 = moment('2016-07-12');
                        //var fecha2 = moment('2016-08-01');
                        //alert(difer);
                        //alert(is_int(difer));
                    </script>
                    <tr>
                        <td><labelfor="asignado_id">Asignar a:</label></td>
                        <td>
                            <select  class="form-control" name="asignador" id="spiner">
                                <option value="0">Selecciona</option>
                                <?php
                                    $omitir = $_SESSION['nombreCompleto'];
                                    $sentencia = "SELECT nombre_Apellido, id_usuario FROM usuarios WHERE NOT nombre_Apellido = '$omitir' AND estatus = 1";
                                    $consulta = $conexion -> prepare($sentencia);
                                    $consulta -> execute();

                                    while($fila = $consulta -> fetch()){ ?>
                                            <option value="<?php echo $fila['id_usuario']; ?>"> <?php echo $fila['nombre_Apellido']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="descripcion_id">Descripcion:</label></td>
                        <td><textarea name="descripcion" id="descripcion_id" class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="status_id">Status: </label></td>
                        <td><input name="estatus" id="status_id" class="form-control" type="text" placeholder="0">
                            </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
    
</body>

</html>
