<?php
    $apeynom = $_POST['nomyape'];
    $archivo = fopen("archivo.txt","w");
    fwrite($archivo, $apeynom);
    fclose($archivo);
    echo "se a actualizado con exito<br><a href='index.php'>Volver</a>";
?>