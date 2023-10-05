<?php
include_once("../conexiondb/conexion_registro.php");
// Conexión a la base de datos
$user = "root";
$pass = "";
$db_name = "dbs_sistema_partidas";

$conn = new mysqli("localhost", "$user", "$pass", "dbs_sistema_partidas");


// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$sacramento = $_POST['sacramento'];
$lugar = $_POST['lugar'];
$fecha = $_POST['fecha'];

// Preparar la consulta SQL para la inserción
$sql = "INSERT INTO sacramentos (nombre, sacramento, fecha, lugar) VALUES ('$nombre', '$sacramento', '$fecha', '$lugar')";

if ($conn->query($sql) === TRUE) {
    // Éxito: responde con un mensaje de éxito
    echo "Registro exitoso.";
} else {
    // Error: responde con un mensaje de error
    echo "Error al registrar el Sacramento: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
