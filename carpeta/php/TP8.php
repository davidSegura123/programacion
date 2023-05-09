<?php
    include '../header.php';
?>
<?php
    $nombre_archivo="Mani.txt";
    if(file_exists($nombre_archivo)) {
    echo "<center>El archivo ya Existe</center>";
    echo "<br>";
    echo "<a href='TP8.php'>Comprobar</a>";
    }else{
        $mensaje=$nombre_archivo;
        if($archivo=fopen($nombre_archivo,"a"))
        {
            if(fwrite($archivo,"Si funcionó, hoy es ".date("d/m/y")." y son las ".date("H:i:s.")))
            {
                echo "<center>Se ha ejecutado bien</center>";
                echo "<br>";
                echo "<a href='TP8.php'>Comprobar</a>";
            }else{
                echo "error";
                echo "<br>";
                echo "<a href='TP8.php'>Comprobar</a>";
            }
        }
        fclose($archivo);
    }
?>
<?php
    include '../footer.php';
?>