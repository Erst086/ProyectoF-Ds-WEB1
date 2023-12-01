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
    <h1>Pagina de registros de trabajadores</h1>
</header>

<body>
    <article>
        <section>

        </section>
        <hr>
    </article>
    <article id="tabla1" >
            <?php
            require "conexion.php";
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
    </article>
</body>
</html>
