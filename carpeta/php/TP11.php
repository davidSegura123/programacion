<?php
    include '../header.php';
?>
<?php
    $file = fopen("Mani.txt", "a");
    fwrite($file, "Añadimos linea 1".PHP_EOL);
    fwrite($file, "Añadimos linea 2".PHP_EOL);
    fclose($file);
    echo "Se añadieron 2 lineas al archivo";
    echo "<a href='TP11.php'>Volver</a>";
?>
<?php
    include '../footer.php';
?>