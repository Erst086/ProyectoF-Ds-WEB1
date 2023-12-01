<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="Recursos_IMG/favicon_perfil.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina de inicio">
    <meta name="keywords" content="HTML, Basico, Curso, UNAM, ICO">
    <meta name="author" content="Ernesto Contreras">
    <link rel="stylesheet" href="css/style2.css">
    <title>Pagina Registros</title>
</head>

<header>
    <h1>GA Proyects </h1>
        <img id="logo" src="recursos/logo.png" alt="logo" width="125px" height="125px">
</header>
<body>
    <article>
        <h1>Tabla de trabajadores </h1>
    </article><br>

    <div>
        <table id="tabla1" border="1">
            <tr>
                <th>ID Trabajador</th>
                <th>RFC</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Domicilio</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
            </tr>
            <?php
            // Reemplaza "conexion2.php" con el nombre correcto de tu archivo de conexión
            require "conexiones/conexion2.php";

            mysqli_set_charset($conexion, 'utf8');

            $consulta_sql = "SELECT * FROM personal";

            $resultado = $conexion->query($consulta_sql);

            $count = mysqli_num_rows($resultado);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_trabajador'] . "</td>";
                    echo "<td>" . $row['RFC'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['ap_paterno'] . "</td>";
                    echo "<td>" . $row['ap_materno'] . "</td>";
                    echo "<td>" . $row['domicilio'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' style='color:red;'>Sin ningún registro</td></tr>";
            }
            
            ?>
        </table>
    </div>

</body>
<footer>
<h1><a href='paginas_anexas/eliminarUsuario.php'>ElimnarUsuario</a></h1>
</footer>
</html>
