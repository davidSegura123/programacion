<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cargar.php" method="post">
        <table>
            <tr>
                <td>
                    Datos Personales
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="nomyape" cols="30" rows="10"><?php
                        $fileName = "archivo.txt";
                        if (file_exists($fileName)) {
                            echo utf8_encode(file_get_CONTENTS($fileName));
                        } else {
                            echo 'No puedes ver el archivo "'.$fileName.'" porque no existe.';
                        }
                    ?></textarea>
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