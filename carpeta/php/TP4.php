<?php
    include '../header.php';
?>
<?php
    $ini="Hola";
    $fin="a todos";
    $todo=$ini." ".$fin;
    echo "<center>".$todo."</center>";
?>
<center>
    <table border="1">
        <tr>
            <td>
                <?php
                    echo "<center>".$ini."</center>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "<center>".$fin."</center>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "<center>".$todo."</center>";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    echo "<a href='index.php'>Volver</a>";
                ?>
            </td>
        </tr>
    </table>
</center>
<?php
    include '../footer.php';
?>