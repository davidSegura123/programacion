<?php
    $apeynom = $_POST["apeynom"];
    $archivo = fopen("archivo.txt","w");
    fwrite($archivo, $apeynom);
    fclose($archivo);
    echo "se a actualizado con exito<br><a href='formulario.php'>Volver</a>";
?>