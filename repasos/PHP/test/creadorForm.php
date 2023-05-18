<?php
    $nomForm = $_POST['nomForm'];
    $nomCamp = $_POST['nomCamp'];
    $nomAction = $_POST['nomAction'];
    include 'creador.php';
    if (file_exists("$nomForm.html")) {
        echo "<p class='error'>'$nomForm.html' ya existe, elija otro nombre.</p>";
    } else {
        if (file_exists("$nomAction.php")) {
            echo "<p class='error'>'$nomAction.php' ya existe, elija otro nombre.</p>";
        } else {
            $html = fopen("$nomForm.html", "w");
            fwrite($html, "
                <!DOCTYPE html>
                <html lang='es'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                        <link rel='stylesheet' href='styles.css'>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>
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
            // aqui el error todavia no logro solucionarlo, debo de correjir las comillas
            fwrite($php, '
                <?php
                    echo `<head><link rel="stylesheet" href="styles.css"></head>`;
                    include `'.$nomForm.'.html`;
                    $campo = $POST[`'.$nomCamp.'`];
                    echo `<p class="exito">'.$nomCamp.': $campo</p>`;
                ?>
            ');
            fclose($php);
            echo "<p class='exito'>".$nomForm." se ha creado exitosamente.<br><a href='".$nomForm.".html'>".$nomForm.".html</a></p>";
        }
    }
?>