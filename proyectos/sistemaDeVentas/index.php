<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- https://youtu.be/VAUVAdQfPOw -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <title>
            Iniciar Sesión
        </title>
    </head>
    <body>
        <div class="super-container-1">
            <header class="header-login">
                <div class="container-img-login">
                    <img src="img/logo-2.png" alt="Logo" class="img-login">
                    <div class="logo1">Sistema <br> de Ventas</div>
                </div>
                <p class="content-login">
                    Un Sistema de Ventas el cual permite <br> la gestión de productos tecnológicos.
                </p>
            </header>
            <form action="validate.php" method="post">
                <div class="container-login">
                    <h1 class="title-login">Inicie Sesión</h1>
                    <input type="text" name="user" id="user-login" class="input-login" placeholder="Usuario">
                    <input type="password" name="password" id="password-login" class="input-login" placeholder="Contraseña">
                    <input type="submit" id="submit-login" class="submit-login" value="Iniciar Sesión">
                </div>
                <p class="singup-login"><a href="singUp.php" class="singup-link-login">Regístrate</a></p>
            </form>
        </div>
    </body>
</html>