<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $ape1   = $_POST['ap_paterno'];
    $ape2   = $_POST['ap_materno'];
    $email  = $_POST['email'];
    $contra = $_POST['contrasena'];

    $consulta = "INSERT INTO usuarios(nombre,ap_paterno,ap_materno,email,contrasena)
                VALUES('$nombre','$ape1','$ape2','$email','$contra')";
    
    // verificar si hay correo repetido
    $verificar = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email'");
    if(mysqli_num_rows($verificar) > 0){
        echo'
        <script>
            alert("El correo proporcionado ya se registro, ingrese otro")
            window.location = "../index.php"
        </script>';
        exit();
    }
        // verificar si hay nombre repetido
        $verificar_nom = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre='$nombre'");
        if(mysqli_num_rows($verificar_nom) > 0){
            echo'
            <script>
                alert("El nombre proporcionado ya se registro, ingrese otro")
                window.location = "../index.php"
            </script>';
            exit();
        }
    $ejecutar = mysqli_query($conexion,$consulta);

    if($ejecutar){
        echo'
        <script>
            alert("usuario alamacenado exitosamente 7u7")
            window.location = "../index.php"
        </script>';
    }else{
        echo'
        <script>
            alert("posible error, de favor contate al administrador")
            window.location = "../index.php"
        </script>';
    }
    mysqli_close($conexion);
?>