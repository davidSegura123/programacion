<?php
    $pancoca=$_POST['lista1'];
    if(!ISSET($_POST['lista1'])) {
    }
?>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Inicio
        </title>
    </head>
    <body>
        <form action="main.php" method="post">
            <select name="lista1" required>
                <option value="1">Alambre</option>
                <option value="2">Cemento</option>
                <option value="3">Cal</option>
                <option value="4">Pan con Coca</option>
            </select>
        </form>
        <textarea name="" cols="30" rows="10" required>

        </textarea>
    </body>
</html>
    <?php
    }else{
        $pancoca=$_POST['lista1'];
        if(!ISSET($_POST['lista1'])) {
        }
