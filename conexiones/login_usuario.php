<?php

    session_start();

    include 'conexion.php';

    $email  = $_POST['email'];
    $contra = $_POST['contrasena'];


    $validar_ingreso = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email' and contrasena='$contra'");

    if(mysqli_num_rows($validar_ingreso) > 0){
        header("location: ../paginaRegistros.php");
        exit;
    }else{
        echo'
        <script>
            alert("El correo proporcionado no esta registrado --Usuario no existente-- ")
            window.location = "../index.php"
        </script>';
        exit;
    }
     
    mysqli_close($conexion);
?>