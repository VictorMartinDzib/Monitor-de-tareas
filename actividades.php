<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: dashboard.php');
}
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
    <title>Monitor de Tareas</title>
</head>

<body>
    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo" >MONITOR DE TAREAS</h1>
            <h3>Usuario <button onclick="location.href='cierreSesion.php'" type="button" class="btn btn-secondary">Salir</button></h3>
        </div>
        <div id="contenido_id" class="contenido">

            
            <form action="#">
                <p>Agregar una actividad 
                    <button id="btn_terminar_id" type="button"
                    class="btn btn-success">Guardar</button>
                    <a class="btn btn-light" href="dashboard.php">ir a Dashboard</a></p>
                <table>
                    <tr>
                        <td class="labels"> <label for="tarea_id">Actividad:</label></td>
                        <td> <input class="form-control" type="text" placeholder="Nombre de la actividad"></td>
                    </tr>
                    <tr>
                        <td class="labels"><label for="fecha_id">Detalles:</label></td>
                        <td><input class="form-control" type="text" placeholder="Descripcion...............">
                        </td>
                    </tr>
                    <tr>
                        <td class="labels"><label for="fechav_id">Fecha/Hora</label></td>
                        <td><input class="form-control" type="datetime-local" placeholder="">
                            </td>
                    </tr>
                    <tr>
                        <td class="labels"> <label for="tarea_id">Para tarea:</label></td>
                        <td> 
                            <select class="form-control">
                                <option>Seleccionar tarea</option>
                              </select>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>

</html>