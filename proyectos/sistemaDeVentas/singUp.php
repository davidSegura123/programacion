<!DOCTYPE html>
<html lang="es">
    <head>
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
            <form action="singUp.php" method="post">
                <div class="container-login">
                    <h1 class="title-login">Regístrese</h1>
                    <?php
                        if(!empty($_POST['submit'])) {
                            if(!empty($_POST["newUser"]) && !empty($_POST["newName"]) && !empty($_POST["newPassword"])) {
                                include("connection.php");
                                $newUser = $_POST["newUser"];
                                $newName = $_POST["newName"];
                                $newPassword = $_POST["newPassword"];
                                $query = $connection -> query("INSERT INTO usuarios (alias_usuario, contraseña_usuario, nombre_usuario, dni_usuario, gmail_usuario, permiso_usuario)
                                VALUES ('$newUser','$newPassword','$newName','0','-','-')");
                                echo "<p class='success-message'>Te has registrado.</p>";
                            } else {
                                echo "<p class='error-message'>ingrese datos.</p>";
                            }
                        }
                    ?>
                    <input type="text" name="newUser" id="user-login" class="input-login" placeholder="Usuario">
                    <input type="text" name="newName" id="name-login" class="input-login" placeholder="Apellido y Nombre">
                    <input type="password" name="newPassword" id="password-login" class="input-login" placeholder="Contraseña">
                    <input type="submit" id="submit-login" name="submit" class="submit-login" value="Registrarse">
                </div>
                <p class="singup-login"><a href="index.php" class="singup-link-login">Iniciar Sesión</a></p>
            </form>
        </div>
    </body>
</html>