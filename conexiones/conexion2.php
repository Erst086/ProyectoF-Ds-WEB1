<?php
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "312908";
$db_name="trabajadores";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
/*
if($conexion->connect_error){
    echo"<h1>MySQL No se conecto Error</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando v2.</h2>";
}
*/
?>