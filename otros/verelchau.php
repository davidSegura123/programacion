<?php
    $texto = $_POST['aqaq'];
    $nombre_archivo="chau.txt";
    $file=fopen($nombre_archivo, 'w');
        fwrite($file, $texto);
    fclose($file);
    echo $nombre_archivo." se a actualizado correctamente.<br><a href='tareaachau.php'>volver</a>";
?>