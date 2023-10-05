<?php

    session_start();

    // Obtener la URL de redireccionamiento guardada en la variable de sesión

    $url_redireccion = isset($_SESSION['url_redireccion']) ? $_SESSION['url_redireccion'] : 'index.php';

    // Destruir todas las variables de sesión

    session_destroy();

    // Redirigir al URL de redireccionamiento después de cerrar sesión

    header("Location: " . $url_redireccion);

    exit;

?>