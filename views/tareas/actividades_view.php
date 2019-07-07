<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estiloST.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Monitor de Tareas</title>
</head>

<body>

    <div id="caja_id" class="caja">
        <div id="cabecera_id" class="cabecera">
            <h1 class="titulo">MONITOR DE TAREAS</h1>
            <h3>Usuario <button onclick="location.href='cierreSesion.php'" type="button" class="btn btn-secondary">Salir</button></h3>
        </div>
        <div id="contenido_id" class="contenido">

            <div id="texto" class="textos">
                <h5 class="title1">Seguimiento de la tarea</h5>
                <button onclick="location.href='formulario.php'" id="btn_add_act" type="button" class="btn btn-success">Agregar Actividad</button>
                <a class="btn btn-light" href="dashboard.php">ir a Dashboard</a>
            </div>
            <p>
                <h6>Nombre de la tarea: <i> </i></h6>
                <h6>Fecha de vencimiento: </h6><br>
                <h6>Actividades de la tarea:</h6>
            </p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Actividad</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Fecha/Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <script src="../js/funcionalidad.js"></script>
        </div>
    </div>
</body>

</html>
