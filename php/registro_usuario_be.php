<?php

    include 'conexion_be.php';

    $nombre_completo= $_POST['nombre_completo'];
    $correo= $_POST['correo'];
    $usuario= $_POST['usuario'];
    $contrasena= $_POST['contrasena'];
    $contrasena= hash('sha512', $contrasena); /* contraseña encriptada */

    $query =   "INSERT INTO usuario(nombre_completo, correo,usuario,contrasena) 
                VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

     if ($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente");
                window.location = "../index.php";
            </script>
        ';
     }else{
        echo '
            <script>
                alert("Error al almacenar, intentalo nuevamente");
                window.location = "../index.php";
            </script>
        ';
     }
     mysqli_close($conexion);
?>