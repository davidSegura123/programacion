<?php
    include '../header.php';
?>
<?php
    if(!isset($_POST['numero']))
    {
?>
    <form action="TP7.php" method="post">
        <table border="0" width="100%">
            <tr>
                <td width="39%">
                    <p aling="right">Ingrese numero del dia de la semana</p>
                    <input type="text" name="numero" size="1" maxlength="1">
                </td>
            </tr>
            <tr>
                <td width="39%"></td>
            </tr>
            <tr>
                <td width="61%">
                    <input type="submit" value="Ver el resultado" name="envio">
                </td>
            </tr>
        </table>
    </form>
    <br>
    <a href="TP7.php">Volver</a>
<?php
    }else{
        $numero=$_POST['numero'];
        if ($numero <= 7) {
            switch ($numero) {
                case 1:
                    echo "<p>Hoy es Lunes</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
                case 2:
                    echo "<p>Hoy es Martes</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
                case 3:
                    echo "<p>Hoy es Miercoles</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
                case 4:
                    echo "<p>Hoy es Jueves</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
                case 5:
                    echo "<p>Hoy es Viernes</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
                case 6:
                    echo "<p>Hoy es Sabado</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
                case 7:
                    echo "<p>Hoy es Domingo</p><br>";
                    echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
                break;
            }
        } else {
            echo "<p>no existe este dia en formato de numero</p><br>";
            echo "<a href='TP7.php'><p><font size='4'>volver</font></p></a>";
        }
    }
?>
<?php
    include '../footer.php';
?>