<?php
    include 'conexion.php';
     $nombre_usuario = $_POST['nombre'];
     $correo = $_POST['email'];
     $contrasena = $_POST['password'];

    
     $query = "INSERT INTO usuarios(nombre, email, password) VALUES ('$nombre_usuario','$correo','$contrasena')";
     $check_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");
     if (mysqli_num_rows($check_email) > 0 ) {
  
        echo '<script>
                        alert("Este correo se encuentra en uso, por favor utiliza otro");
                        window.location = "../index.html";
                        </script>
        ';
     exit();
     }    
     $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar){
        echo '
        <script>
                alert("Usuario almacenado correctamente");
                window.location = "../index.html";
        </script>
        <br>
        <br>
        ';
    
        }
        else {
            echo '
        <script>
                alert("Usuario almacenado correctamente");
        </script>
        ';

        }
        mysqli_close($conexion);
?>