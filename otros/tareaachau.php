<html>
    <head>
        <title>
            Tareachau
        </title>
    </head>
    <body bgcolor="green">
        <form action="verelchau.php" method="POST">
            <fieldset>
                <legend>
                    Formulario
                </legend>
                <table border="0" bgcolor="pink" bordercolor="pink" cellspacing="1" cellpadding="4" align="center">
                    <tr bgcolor="lightblue">
                        <th colspan="2" Align="center">
                            <h1>Formulario</h1>
                        </th>
                    </tr>
                    <tr>
                        <td bgcolor="pink">
                            <p>Nombre:</p>
                        </td>
                        <td bgcolor="orange">
                            <textarea name="aqaq" cols="30" rows="10" required>
                                <?php
                                    $nombre_archivo="chau.txt";
                                    if (file_exists($nombre_archivo)) {
                                        echo utf8_encode(file_get_contents($nombre_archivo));
                                    } else {
                                        echo $nombre_archivo." no existe";
                                    }
                                ?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" bgcolor="orange" align="center">
                            <input type="submit">
                            <input type="reset">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <br>
    </body>
</html>