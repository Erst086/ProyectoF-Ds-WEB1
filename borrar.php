<?php
include 'conexiones/conexion2.php';

// Verificar si se ha enviado el ID del trabajador a eliminar
if (isset($_POST['id_trabajador'])) {
    $id_trabajador = $_POST['id_trabajador'];

    // Consulta para eliminar el trabajador por su ID
    $consulta_borrado = "DELETE FROM personal WHERE id_trabajador = $id_trabajador";

    // Ejecutar la consulta de borrado
    $ejecutar_borrado = mysqli_query($conexion, $consulta_borrado);

    // Verificar si se ejecutó correctamente
    if ($ejecutar_borrado) {
        echo '<script>
            alert("Trabajador eliminado exitosamente");
            window.location = "paginaRegistros.php";
        </script>';
        exit();
    } else {
        echo '<script>
            alert("Error al eliminar el trabajador: ' . mysqli_error($conexion) . '");
            window.location = "paginaRegistros.php";
        </script>';
        exit();
    }
} else {
    echo '<script>
        alert("ID de trabajador no proporcionado");
        window.location = "paginaRegistros.php";
    </script>';
    exit();
}

mysqli_close($conexion);
?>
