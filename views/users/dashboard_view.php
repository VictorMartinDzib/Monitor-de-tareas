
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/styles/css/estilos.css">
    <link rel="stylesheet" href="views/styles/css/estiloDash.css">
    <link rel="stylesheet" href="views/styles/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="views/styles/bootstrap/bootstrap.min.css">
    <title>Monitor de Tareas</title>
</head>

<body>
    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo">MONITOR DE TAREAS</h1>

            <h3> 
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
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <button type="button" class="btn btn-danger">X</button></td>
                           
                        </tr>

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
                        
                       
                        <tr>
                       
                            
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            <form action="seguimiento.php" method="POST">
                                <input name="title" type="text" style="display: none">
                                <input name="fechaFin" type="text" >
                            <button type="submit" class="btn btn-info">Ver</button></form></td>                         
                        </tr>
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

                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">X</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
