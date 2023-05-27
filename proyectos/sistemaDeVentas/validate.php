<?php
    if(!empty($_POST["user"]) && !empty($_POST["password"])) {
        include("connection.php");
        $user = $_POST["user"];
        $password = $_POST["password"];
        $query = $connection -> query("SELECT * FROM usuarios WHERE alias_usuario = '$user' AND contraseña_usuario = '$password'");
        if($data = $query -> fetch_object()) {
            include("index.php");
            header("location:homeUser.php");
        } else {
            include("index.php");
            echo "<p class='error-message'>Error: usuario no encontrado.</p>";
        }
    } else {
        include("index.php");
        echo "<p class='error-message'>Error: datos vacíos.</p>";
    }
?>