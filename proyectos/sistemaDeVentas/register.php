<?php
    session_start();
    if(!empty($_POST["user"]) && !empty($_POST["password"])) {
        include("connection.php");
        $user = $_POST["user"];
        $password = $_POST["password"];
        $query = $connection -> query("SELECT * FROM usuarios WHERE alias_usuario = '$user' AND contraseña_usuario = '$password'");
        if($data = $query -> fetch_object()) {
            $_SESSION["id"] = $data -> id_usuario;
            $_SESSION["alias"] = $data -> alias_usuario;
            $_SESSION["contraseña"] = $data -> contraseña_usuario;
            $_SESSION["nombre"] = $data -> nombre_usuario;
            $_SESSION["dni"] = $data -> dni_usuario;
            $_SESSION["gmail"] = $data -> gmail_usuario;
            $_SESSION["permiso"] = $data -> permiso_usuario;
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