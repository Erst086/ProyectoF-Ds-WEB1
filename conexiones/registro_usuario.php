<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $ape1   = $_POST['ap_paterno'];
    $ape2   = $_POST['ap_materno'];
    $email  = $_POST['email'];
    $contra = $_POST['contrasena'];

    $consulta = "INSERT INTO usuarios(nombre,ap_paterno,ap_materno,email,contrasena)
                VALUES('$nombre','$ape1','$ape2','$email','$contra')";
    

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