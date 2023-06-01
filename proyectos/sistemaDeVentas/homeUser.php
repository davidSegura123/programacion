<?php
    include("connection.php");
    session_start();
    if(empty($_SESSION["id"])) { // al intentar moverse a homeUser sin iniciar sesion, te redigira a logIn.php ya que la variable de sesion del id del usuario esta vacia justamente porque no se inicio sesion
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <title>
            Inicio Usuario
        </title>
    </head>
    <body>
        
    </body>
</html>