<?php
    $nomForm = $_POST['nomForm'];
    $nomCamp = $_POST['nomCamp'];
    $nomAction = $_POST['nomAction'];
    include 'creador.php';
    if (file_exists("$nomForm.html")) {
        echo "'$nomForm.html' ya existe, elija otro nombre.<br><a href='$nomForm.html'>$nomForm.html</a>";
    } else {
        if (file_exists("$nomAction.php")) {
            echo "'$nomAction.php' ya existe, elija otro nombre.<br><a href='$nomForm.html'>$nomForm.html</a>";
        } else {
            $html = fopen("$nomForm.html", "w");
            fwrite($html, "
                <!DOCTYPE html>
                <html lang='es'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>
                            $nomForm
                        </title>
                    </head>
                    <body>
                        <form action='$nomAction.php' method='post'>
                            <table>
                                <tr>
                                    <td>
                                        <h2>$nomForm</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type='text' name='$nomCamp' placeholder='$nomCamp' required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type='submit' value='Cargar'>
                                        <a href='creador.php'>Volver</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </body>
                </html>
            ");
            fclose($html);
            $php = fopen("$nomAction.php", "w");
            fwrite($php, '
                <?php
                    include "'.$nomForm.'.html";
                    $campo = $_POST["'.$nomCamp.'"];
                    echo "'.$nomCamp.': $campo";
                ?>
            ');
            fclose($php);
            echo "$nomForm se ha creado exitosamente.<br><a href='$nomForm.html'>$nomForm.html</a>";
        }
    }
    include '../footer.php';
?>