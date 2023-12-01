<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina eliminar usuarios">
    <meta name="keywords" content="HTML, Basico, Curso, UNAM, ICO">
    <meta name="author" content="Ernesto Contreras">
    <link rel="stylesheet" href="styles.css">
    <title>Pagina para eliminar usuarios</title>
</head>
<body>
    <h1 style="text-align: center;">Eliminar Usuario</h1>
    <form style="text-align: center;" method="POST" action="borrar.php">
        <input type="text" name="id_trabajador" placeholder="Id trabajador" />
        <br />
        <button type="submit">Eliminar</button>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br>
    <h1><a href="../paginaRegistros.php">Regresar a Tabla de trabajadores</a></h1> 
</body>
</html>
