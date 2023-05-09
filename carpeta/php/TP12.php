<?php
    include '../header.php';
?>
<fieldset>
    <table>
        <tr>
            <th>
                <h1>Datos Personales</h1>
            </th>
        </tr>
        <form action="TP13.php" method="post">
            <legend>Datos Personales</legend>
        </form>
        <tr>
            <td>Nombre Usuario:</td>
            <td><textarea name="texto" id="texto" cols="60" rows="20" required></textarea></td>
        </tr>
        <tr>
            <td>Contraseña:</td>
            <td><input type="password" name="pass" id="pass" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</fieldset>
<?php
    include '../footer.php';
?>