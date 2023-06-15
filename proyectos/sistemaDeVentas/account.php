<?php
    include('connection.php');
    session_start();
    if(empty($_SESSION["id"])) {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/homeUser.css">
        <title>
            Cuenta
        </title>
    </head>
    <body>
        <?php include('layout/header.php'); ?>
        <?php include('layout/aside.php'); ?>
        <main class="content-homeUser">
            <form action="account.php" method="post">
                <table class="table-account lk">
                    <tr>
                        <td colspan="2">
                            <h1>Información Personal</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                if(!empty($_POST['submit-account'])) {
                                    if(!empty($_POST["updateAliasUser"]) && !empty($_POST["updatePasswordUser"]) && !empty($_POST["updateNameUser"]) && !empty($_POST["updateDniUser"]) && !empty($_POST["updateGmailUser"])) {
                                        include("connection.php");
                                        $updateAlias = $_POST["updateAliasUser"];
                                        $updatePassword = $_POST["updatePasswordUser"];
                                        $updateName = $_POST["updateNameUser"];
                                        $updateDni = $_POST["updateDniUser"];
                                        $updateGmail = $_POST["updateGmailUser"];
                                        $query = $connection -> query("UPDATE usuarios SET alias_usuario = $updateAlias, contraseña_usuario = $updatePassword, nombre_usuario = $updateName, dni_usuario = $updateDni, gmail_usuario = $updateGmail WHERE id_usuario = ".$_SESSION["id"]."");
                                        echo "<p class='success-message'>Datos actualizados.</p>";
                                    } else {
                                        echo "<p class='error-message'>ingrese datos.</p>";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Foto de perfil
                        </td>
                        <td>
                            <img src="img/img-perfil-vacio.jpg" alt="usuario" class="img-2-homeUser">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Alias
                        </td>
                        <td>
                            <input type="text" maxlength="20" name="updateAliasUser" value="<?= $_SESSION["alias"] ?>" class="update-account" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña
                        </td>
                        <td>
                            <input type="text" maxlength="15" name="updatePasswordUser" value="<?= $_SESSION["contraseña"] ?>" class="update-account" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombre
                        </td>
                        <td>
                            <input type="text" maxlength="40" name="updateNameUser" value="<?= $_SESSION["nombre"] ?>" class="update-account" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            DNI
                        </td>
                        <td>
                            <input type="number" maxlength="8" name="updateDniUser" value="<?= $_SESSION["dni"] ?>" class="update-account" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h1>Información de Contacto</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gmail
                        </td>
                        <td>
                            <input type="email" maxlength="40" name="updateGmailUser" value="<?= $_SESSION["gmail"] ?>" class="update-account" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Actualizar" name="submit-account" class="submit-update">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="singOff.php" title="Sirve para cerrar sesion" class="submit-update">Cerrar sesión</a>
                        </td>
                    </tr>
                </table>
            </form>
        </main>
    </body>
</html>