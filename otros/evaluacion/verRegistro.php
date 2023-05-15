<?php
    include 'index.html';
    $fileName = "registro.txt";
    if (file_exists($fileName)) {
        echo nl2br(file_get_CONTENTS($fileName));
    } else {
        echo '<p class="fileError">No puedes ver el archivo "'.$fileName.'" porque no existe.</p>';
    }
?>