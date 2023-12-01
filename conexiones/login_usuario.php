<?php
    include 'conexion.php';

    $email  = $_POST['email'];
    $contra = $_POST['contrasena'];


    $validar_ingreso = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email'");
    if(mysqli_num_rows($validar_ingreso) > 0){
        header("location: ../pagina_rgistros.php")
        echo'
        <script>
            alert("El correo proporcionado ya se registro, ingrese otro")
            window.location = "../index.php"
        </script>';
        exit();
    }
     
    mysqli_close($conexion);
?>