<?php
    if(($_POST['materiales']) != 0) {
        include('index.php');
        $material = $_POST['materiales'];
        $registro = fopen("registro.txt", "w");
            fwrite($registro, "Call: 0
Arena: 0
Piedras: 0
Varillas: 0
Ladrillos: 0");
        fclose($registro);
    } else {
        include('index.php');
        echo "Seleccione un material.";
    }
?>