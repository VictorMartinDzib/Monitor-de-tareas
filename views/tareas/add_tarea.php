<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/styles/css/estilos.css">
    <link rel="stylesheet" href="views/styles/css/estiloDT.css">
	<link rel="stylesheet" href="views/styles/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="views/styles/bootstrap/bootstrap.min.css">
    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <title>Monitor de Tareas</title>
    
</head>

<body>
    </select>
    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo" >MONITOR DE TAREAS</h1>
            <h3> <button onclick="location.href='cierreSesion.php'" type="button" class="btn btn-secondary">Salir</button></h3>
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
                        <td><input name="dias_faltantes" id="diasf_id" class="form-control" type="text" placeholder="none" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="asignado_id">Asignar a:</label></td>
                        <td>
                            <select  class="form-control" name="asignador" id="spiner">
                                <option value="0">Selecciona</option>
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
