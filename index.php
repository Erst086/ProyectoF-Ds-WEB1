<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="recursos/favicon_perfil.jpg" />
    <meta name="description" content="Pagina de inicio Registro y Logueo">
    <meta name="keywords" content="HTML, Basico, Curso, UNAM, ICO">
    <meta name="author" content="Ernesto Contreras">
    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


    <title>GA_Proyects</title>
</head>
<header>
    <h1>GA Proyects </h1>
    <section id="logo">
        <img src="recursos/logo.png" alt="logoEmpresa" width="150px" height="150px">
    </section>
</header>

<body>
    <main>

        <head></head>
        <div class="Recuadro_LRG">
            <div class="box_trasera">
                <div class="box_trsr_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="box_trsr_registro">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="login-register">
                <!--Login-->
                <form action="" class="FML-login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" required placeholder="Correo Electronico">
                    <input type="password" required placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <!--Registro-->
                <form action="conexiones/registro_usuario.php" method="POST" class="FML-register">
                    <h2>Registrarse</h2>
                    <input type="text" required placeholder="Nombre" name="nombre">
                    <input type="text" required placeholder="Apellido Paterno" name="ap_paterno">
                    <input type="text" required placeholder="Apellido Materno" name="ap_materno">
                    <input type="text" required placeholder="Correo Electronico"name="email">
                    <input type="password" required placeholder="Contraseña"name="contrasena">
                    <button>Registrarse</button>
                    <h6><a href="paginas_anexas/politica.php" style="color: black;">Precione para leer las políticas de privacidad ... je je</a></h6>
                </form>
            </div>
        </div>
    </main>
    <script src="js/scrip.js"></script>
</body>

</html>