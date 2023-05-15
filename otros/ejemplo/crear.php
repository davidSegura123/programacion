<?php
    $nombreArchivo = "archivo.txt";
    if (file_exists($nombreArchivo)) {
        echo "<a href='formulario.php'>Ir al Formulario</a>";
    } else {
        $archivo = fopen($nombreArchivo, "a");
        fwrite($archivo, "Segura David");
        fclose($archivo);
        echo "Se a creado correctamente.<br><a href='formulario.php'>Ir al Formulario</a>";
    }
?>