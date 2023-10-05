<?php
// Verificar si se ha enviado una fecha de búsqueda
if (isset($_POST['fechaBusqueda'])) {
    // Recuperar la fecha de búsqueda del formulario
    $fechaBusqueda = $_POST['fechaBusqueda'];

    // Realizar la conexión a la base de datos (ajusta los detalles según tu configuración)
    $user = "root";
    $pass = "";
    $db_name = "dbs_sistema_partidas";
  
    $conn = new mysqli("localhost", "$user", "$pass", "dbs_sistema_partidas");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para buscar sacramentos en la fecha especificada
    $sql = "SELECT * FROM sacramentos WHERE fecha = ?";
   
    // Preparar la consulta
    $stmt = $conn->prepare($sql);
   
    // Verificar errores en la preparación de la consulta
    if (!$stmt) {
        die("Error en la consulta SQL: " . $conn->error);
    }

    // Asignar el valor de la fecha y ejecutar la consulta
    $stmt->bind_param("s", $fechaBusqueda);

    // Verificar errores en la ejecución de la consulta
    if (!$stmt->execute()) {
        die("Error al ejecutar la consulta: " . $stmt->error);
    }

    // Obtener resultados
    $result = $stmt->get_result();

    // Comprobar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Mostrar resultados en una tabla HTML
        echo "<h2>Resultados de la búsqueda:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Sacramento</th><th>Fecha</th><th>Lugar</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["sacramento"] . "</td>";
            echo "<td>" . $row["fecha"] . "</td>";
            echo "<td>" . $row["lugar"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados para la fecha especificada.";
    }

    // Cerrar el statement
    $stmt->close();

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    echo "No se ha proporcionado una fecha de búsqueda válida.";
}
?>
