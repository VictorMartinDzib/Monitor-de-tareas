<?php
    require_once('baseDatos.php');
    $bd = BaseDeDatos::getInstancia();
    $conexion = $bd -> getConexion();

    echo ($conexion ? "si se conecto" : "NEL");
    $sql = $conexion -> query('SELECT * FROM tareas');
    while($fila = $sql -> fetch()){
        echo $fila['titulo'];
    }
?>
