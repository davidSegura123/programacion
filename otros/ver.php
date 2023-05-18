<?php
    $campo=$_POST['nashe'];
    $archivo=fopen("hola.txt", 'w');
    fwrite($archivo, $campo .PHP_EOL);
    fclose($archivo);
    echo "El archivo se a actualizado <a href='index.php'>volver</a>";
?>