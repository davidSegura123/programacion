<?php
    include 'index.html';
    $usuario = $_POST['user'];
    $contraseña = $_POST['passw'];
    $fileName = "registro.txt";
    if (!file_exists($fileName)) {
        $file = fopen($fileName, "a");
        fwrite($file, "Usuario: ".$usuario.PHP_EOL);
        fwrite($file, "Contraseña: ".$contraseña.PHP_EOL);
        echo "<p class='fileCreate'>Se a creado el registro.</p>";
        fclose($file);
    } else {
        echo '<p class="fileError">Ya no puedes registrarte porque el archivo "'.$fileName.'" ya existe.</p>';
    }
?>