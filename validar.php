<?php

include_once("conexiondb/conexion_registro.php");

    $usuario = $_POST['usuario'];

    $clave = $_POST['clave'];

    session_start();

    $_SESSION['usuario'] = $usuario;

    $pass = md5(mysqli_real_escape_string($conn, $_POST['clave']));

    $consulta = "SELECT*FROM usuario where Usuario='$usuario' and Pass='$pass'";

    $resultado = mysqli_query($conn, $consulta);

    $filas = mysqli_fetch_array($resultado);

    $count=mysqli_num_rows($resultado);

    while ($count > 0){

        if ($filas['Cargo'] == 'administrador') { //administrador 

            if (isset($_SESSION['url_redireccion'])) {

                $url_redireccion = $_SESSION['url_redireccion'];

                unset($_SESSION['url_redireccion']); // Eliminar la variable de sesión

                header("Location: " . $url_redireccion);

            } else {

                header("Location: principal.php");

            }

            exit;

        } elseif (isset($_SESSION['url_redireccion'])) {

            $url_redireccion = $_SESSION['url_redireccion'];

            unset($_SESSION['url_redireccion']); // Eliminar la variable de sesión

            header("Location: " . $url_redireccion);

        } else {

            header("Location: ax/principal.php");

        }

        exit;

    }

        session_destroy(); // Eliminar la variable de sesión

        echo "<script>alert('Usuario o contraseña incorrecto');window.location= 'index.php'</script>";

?>