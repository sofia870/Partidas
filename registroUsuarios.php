<?php
include_once("conexiondb/conexion_registro.php");
session_start();

// Configuración de la base de datos
$user = "root";
$pass = "";
$dbname = "dbs_sistema_partidas";

// Conexión a la base de datos
$conn = new mysqli("localhost", $user, $pass, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
// Recibe los datos del formulario
    $nombre = $_POST["nombre"];
    
    $
$apellido = $_POST["apellido"];
    
    $
$usuario = $_POST["usuario"];
    $iglesia = $_POST["iglesia"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash de la contraseña

    

   


// Verifica si el usuario ya existe en la base de datos
    $verificar_query = "SELECT usuario FROM registrar_usuarios WHERE usuario = ?";
    
    $

   
$stmt = $conn->prepare($verificar_query);
    
   
$stmt->bind_param("s", $usuario);
    
    $

   
$stmt->execute();
    
   
$result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // El usuario ya existe
        echo "El usuario ya está registrado.";
    } else {
        // Inserta el nuevo usuario en la base de datos
        $insert_query = "INSERT INTO registrar_usuarios (nombre, apellido, usuario, clave, iglesia) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sssss", $nombre, $apellido, $usuario, $password, $iglesia);

        if ($stmt->execute()) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar: " . $stmt->error;
        }
    }

    // Cierra la sentencia preparada
    $stmt->close();
}

// Cierra la conexión a la base de datos
$conn->close();
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
    <link rel="stylesheet" href="css/style.usuariosR.css">
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
 <h1><img src="img/index.png" alt="Imagen de inicio de sesión"><br>Registrar</h1>
 <form action="" method="post">
    <label for="nombre">
        <i class="fas fa-user"></i> 
    </label>
    <input type="text" name="nombre" placeholder="Nombre" id="nombre" required>

    <label for="apellido">
        <i class="fas fa-user"></i>
    </label>
    <input type="text" name="apellido" placeholder="Apellido" id="apellido" required>

    <label for="usuario">
        <i class="fas fa-user"></i> 
    </label>
    <input type="text" name="usuario" placeholder="Usuario" id="usuario" required>

    <label for="iglesia">
        <i class="fas fa-church"></i> 
    </label>
    <input type="text" name="iglesia" placeholder="Iglesia" id="iglesia" required>

    <label for="contrasena">
        <i class="fas fa-lock"></i> 
    </label>
    <input type="password" name="password" placeholder="Contraseña" id="password" required>

    <input type="submit" value="Registrar">
</form>
</div>

</body>
</html>
