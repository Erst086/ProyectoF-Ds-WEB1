
<?php
include "conexion2.php";
mysqli_set_charset($conexion, 'utf8');
$registroEliminado = $_POST['id_trabajador'];

$consulta = "DELETE FROM personal WHERE id_trabajador = $registroEliminado";

mysqli_query($conexion, $consulta);

mysqli_close($conexion);
header('location: ../paginaRegistros.php');
?>
