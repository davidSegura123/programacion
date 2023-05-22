<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <title>
            Construccion - Web
        </title>
    </head>
    <body>
        <form action="main.php" method="post">
            <div class="container">
                <h1>Productos</h1>
                <div class="content">
                    <div class="nav">
                        <select name="materiales" required>
                            <option value="0" selected>Agregar Material</option>
                            <option value="1">Cal - $1000 c/u</option>
                            <option value="2">Arena - $600 c/u</option>
                            <option value="4">Piedras - $700 c/u</option>
                            <option value="3">Varillas - $700 c/m</option>
                            <option value="5">Ladrillos - $6250 x25</option>
                        </select>
                        <input type="submit" value="Agregar">
                    </div>
                    <textarea name="registro" cols="30" disabled rows="10"><?php
                        echo file_get_contents("registro.txt");
                    ?></textarea>
                </div>
            </div>
        </form>
    </body>
</html>