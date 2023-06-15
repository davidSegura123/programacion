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
            Usuarios
        </title>
    </head>
    <body>
        <?php include('layout/header.php'); ?>
        <?php include('layout/aside.php'); ?>
        <main class="content-homeUser">
            <table class="table-account">
                <tr>
                    <th class="n">
                        Id
                    </th>
                    <th class="n">
                        Alias
                    </th>
                    <th class="n">
                        Contraseña
                    </th>
                    <th class="n">
                        Nombre
                    </th>
                    <th class="n">
                        DNI
                    </th>
                    <th class="n">
                        Gmail
                    </th>
                    <th class="n">
                        Permiso
                    </th>
                </tr>
                <?php
                    $query = $connection -> query("SELECT * FROM usuarios");
                    while($data = $query -> fetch_object()) {
                ?>
                <tr class="g">
                    <td class="j">
                        <?php echo $data -> id_usuario ?>
                    </td>
                    <td>
                        <?php echo $data -> alias_usuario ?>
                    </td>
                    <td>
                        <?php echo $data -> contraseña_usuario ?>
                    </td>
                    <td>
                        <?php echo $data -> nombre_usuario ?>
                    </td>
                    <td>
                        <?php echo $data -> dni_usuario ?>
                    </td>
                    <td>
                        <?php echo $data -> gmail_usuario ?>
                    </td>
                    <td class="jk">
                        <?php echo $data -> permiso_usuario ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </main>
    </body>
</html>