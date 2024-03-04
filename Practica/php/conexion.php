<?php
    $conexion = mysqli_connect("localhost", "root", "", "masterbd");

    if ($conexion){
        echo "Se ha realizado exitosamente la conexion";
    }
     else {
        "Conexion fallida";
     }

?>