<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>
            Creador
        </title>
    </head>
    <body>
        <form action="creadorForm.php" method="post">
            <table>
                <tr>
                    <td>
                        <h2>Creador</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nomForm" placeholder="Nombre del Formulario" spellcheck="false" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nomCamp" placeholder="Nombre del Campo" spellcheck="false" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nomAction" placeholder="Nombre del Accionador" spellcheck="false" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Crear">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>