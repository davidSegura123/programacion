<?php
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if (!empty(trim($user)) && !empty(trim($pass))) {
        if ($user === 'seguraDavid123' && $pass === 'NASHE_102') {
            header ('location:home.php');
        } else {
            include 'index.php';
            die('<p class="confirmErr">Error: contraseña incorrecta</p>');
        }
    } else {
        include 'index.php';
        die('<p class="confirmErr">Error: campos vacios</p>');
    }
?>