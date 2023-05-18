<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
</head>
<body>
    <form action="ver.php" method="post">
        <fieldset>
            <legend>Formulario</legend>
            <table>
                <tr>
                    <td>
                        datos
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="nashe" cols="30" rows="10">
                            <?php
                                $fileName="hola.txt";
                                if (file_exists($fileName)) {
                                    echo utf8_encode(file_get_CONTENTS($fileName));
                                } else {
                                    echo $fileName." no exite.";
                                }
                            ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="cargar">
                        
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>