<?php
    include '../header.php';
?>
<?php
    $file=fopen("Mani.txt","w");
    fwrite($file, "Esto es una nueva linea.".PHP_EOL);
    fwrite($file, "Esto es una otra linea.".PHP_EOL);
    fclose($file);
    echo "<p>Se csmbiaron los datos del archivo.</p>
    <br><a href='TP10.php'>Volver</a>";
?>
<?php
    include '../footer.php';
?>