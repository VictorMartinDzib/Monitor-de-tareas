<?php 

if(isset($_SESSION['us']))
{
    $tabla1 = $this -> tarea1;
    $tabla2 = $this -> tarea2;
    $tabla3 = $this -> tarea3;
?>
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

            <h3> <?php echo $_SESSION['us'];  ?>
            <button onclick="location.href='<?php echo 'exit'; ?> '" type="button" class="btn btn-secondary">Salir</button></h3>
        </div>
        <div id="contenido_id" class="contenido">
            <div class="txt_btn">
                <h4 class="title1">Tareas vencidas </h4>
                <a href="tarea" id="btn_agregar_id" type="button" class="btn btn-success">Agregar Tarea</a>
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
                $cont = 1; 
                foreach ($tabla1 as $fila){ ?>
                        <tr>
                            <th scope="row"> <?php echo $cont++; ?></th>
                            <td><?php echo $fila->titulo; ?>  </td>
                            <td><?php echo $fila->nombre_Apellido; ?>  </td>
                            <td><?php echo $fila->fecah_venc; ?>  </td>
                            <td> <button type="button" class="btn btn-danger">X</button></td>
                        </tr>
                <?php } ?>
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
                        $cont++; 
                        foreach($tabla2 as $fila){ ?>
                        <tr>
                            <th scope="row"> <?php echo $cont++; ?> </th>
                            <td> <?php echo $fila->titulo; ?> </td>
                            <td> <?php echo $fila->nombre_Apellido; ?> </td>
                            <td> <?php echo $fila->fecah_venc; ?> </td>
                            <td>
                            <form action="seguimiento.php" method="POST">
                                <input name="title" type="text" style="display: none">

                            <button type="submit" class="btn btn-info">Ver</button></form></td>                      
                        </tr>
                        <?php
                            }
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
                    $cont = 1;
                    foreach ($tabla3 as $fila) {
                 ?>
                    <tr>
                        <th scope="row"> <?php echo $cont++; ?> </th>
                        <td> <?php echo $fila ->titulo; ?> </td>
                        <td> <?php echo $fila->nombre_Apellido; ?> </td>
                        <td> <?php echo $fila->fecah_venc;  ?> </td>
                        <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">X</button>
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

<?php
    }else{
        header('Location: regresar');
    }
?>