<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Formulario
        </title>
    </head>
    <body>
        <form action="actualizar.php" method="post">
            <table>
                <tr>
                    <td>
                        Datos Personales
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="apeynom" cols="30" rows="10">
                            <?php
                                echo nl2br(file_get_CONTENTS("archivo.txt"));
                            ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Actualizar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>