<?php
    $nomform = $_POST['ver.php'];
    $xcampo = $_POST['ver.php'];
    $actionform = $_POST['ver.php'];
    if (file_exists($nomform)) {
        echo '"'.$nomform.'" ya existe.<br><a href="creador.php">Volver</a>';
    } else {
        $formhtml = fopen($nomform.".html", "w");
        fwrite($formhtml, "
            <form action='".$actionform.".php' method='post'>
                <table>
                    <tr>
                        <td colspan='2'>
                            Formulario
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ".$xcampo."
                        </td>
                        <td>
                            <input type='text' name='".$xcampo."' required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <input type='submit' value='Cargar'>
                            <input type='reset' value='Borrar'>
                        </td>
                    </tr>
                </table>
            </form>
        ");
        $formphp = fopen($actionform.".php", "w");
        fwrite($formphp, '
            <?php
                $valor = $_POST["'.$xcampo.'"];
                echo $valor;
            ?>
        ');
        echo "<a href='".$nomform.".html'>Ver el Formulario</a>";
    }
?>
