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
            <form action="index.php" method="post">
                <div class="container-login">
                    <h1 class="title-login">Inicie Sesión</h1>
                    <?php
                        if(!empty($_POST['submit'])) {
                            session_start();
                            if(!empty($_POST["user"]) && !empty($_POST["password"])) {
                                include("connection.php");
                                $user = $_POST["user"];
                                $password = $_POST["password"];
                                $query = $connection -> query("SELECT * FROM usuarios WHERE alias_usuario = '$user' AND contraseña_usuario = '$password'");
                                if($data = $query -> fetch_object()) {
                                    $_SESSION["id"] = $data -> id_usuario;
                                    $_SESSION["alias"] = $data -> alias_usuario;
                                    $_SESSION["contraseña"] = $data -> contraseña_usuario;
                                    $_SESSION["nombre"] = $data -> nombre_usuario;
                                    $_SESSION["dni"] = $data -> dni_usuario;
                                    $_SESSION["gmail"] = $data -> gmail_usuario;
                                    $_SESSION["permiso"] = $data -> permiso_usuario;
                                    header("location:homeUser.php");
                                } else {
                                    echo "<p class='error-message'>usuario no encontrado.</p>";
                                }
                            } else {
                                echo "<p class='error-message'>ingrese datos.</p>";
                            }
                        }
                    ?>
                    <input type="text" name="user" id="user-login" class="input-login" placeholder="Usuario">
                    <input type="password" name="password" id="password-login" class="input-login" placeholder="Contraseña">
                    <input type="submit" id="submit-login" name="submit" class="submit-login" value="Iniciar Sesión">
                </div>
                <p class="singup-login"><a href="singUp.php" class="singup-link-login">Regístrate</a></p>
            </form>
        </div>
    </body>
</html>