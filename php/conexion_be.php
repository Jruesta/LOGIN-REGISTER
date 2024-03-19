<?php
/*Conexion de la base de datos*/

    $conexion = mysqli_connect("localhost", "root","" , "login_register_db");
    if($conexion){
        echo 'Conectado Correctamente a la base de datos';
    }else{
        echo 'No se puedo conectar a la base de datos';
    }
    
?>
