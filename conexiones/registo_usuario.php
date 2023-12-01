<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $ape1   = $_POST['ap_paterno'];
    $ape2   = $_POST['ap_materno'];
    $email  = $_POST['email'];
    $contra = $_POST['contrasena'];

    $consulta = "INSERT INTO usuarios(nombre,ap_parteno,ap_materno,email,contrasena)
                VALUES('$nombre','$ape1','$ape2','$email','$contra')";

    $ejecutar = mysqli_query($conexion,$consulta);
?>