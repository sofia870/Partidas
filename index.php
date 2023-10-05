<?php
include_once("conexiondb/conexion_registro.php");
session_start();

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["username"];
    $contrasena = $_POST["password"];

    // Consulta preparada para evitar la inyección SQL
    $consulta = "SELECT cargo FROM usuario WHERE Usuario=? AND clave=?";
    $stmt = mysqli_prepare($conn, $consulta);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $contrasena);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $cargo);

    if (mysqli_stmt_fetch($stmt)) {
        mysqli_stmt_close($stmt);
        if ($cargo == "auxiliar") {
            $_SESSION['usuario'] = $usuario;
            header("Location: principal.php");
            exit();
        } elseif ($cargo == "administrador") {
            $_SESSION['usuario'] = $usuario;
            header("Location: ax/principal.php");
            exit();
        } else {
            $error_message = "Nombre de usuario o contraseña incorrectos";
        }
    } else {
        $error_message = "Nombre de usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" >
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Inicio Sistema de Partidas</title>
     <!-- Favicon - FIS -->
     <link rel="shortcut icon" href="img/iglesia.png">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container" style="margin-top: 0;">
        <div class="navbar-text mx-auto">Sistema de Partidas</div>
    </div>
</nav>

<div class="login">
 <h1><img src="img/index.png" alt="Imagen de inicio de sesión"><br>Iniciar Sesión</h1>
    <form action="" method="post">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username"
        placeholder="Usuario" id="usuario" required>
        <label for="contrasena">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password"
        placeholder="Contraseña" id="password" required>
        <input type="submit" value="Acceder">
    </form>

    <?php
    // Mostrar mensaje de error, si existe
    if (!empty($error_message)) {
        echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
    }
    ?>
</div>

</body>
</html>
