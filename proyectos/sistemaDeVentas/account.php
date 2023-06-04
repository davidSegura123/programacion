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
            cuenta
        </main>
    </body>
</html>