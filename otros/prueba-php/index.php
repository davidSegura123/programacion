<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Inicio
        </title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }
            body {
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            table {
                text-align: center;
                border: 1px solid grey;
                padding: 10px;
            }
            input {
                margin: 10px;
                padding: 5px;
            }
            .error {
                width: 100%;
                background-color: red;
                color: white;
                font-weight: bold;
                border-radius: 5px;
            }
            .success {
                background-color: green;
                color: white;
                font-weight: bold;
                border-radius: 5px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <table>
                <tr>
                    <th><h1>Regístrate</h1></th>
                </tr>
                <tr>
                    <td>
                        <?php
                            if(!empty($_POST['submit'])) {
                                if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
                                    $usuario = $_POST['usuario'];
                                    $contraseña = $_POST['contraseña'];
                                    echo "<p class='success'>Se a registrado <br> correctamente</p>";
                                } else {
                                    echo "<p class='error'>Error: datos vacios</p>";
                                }
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="usuario" placeholder="usuario">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="contraseña" placeholder="contraseña">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Cargar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>