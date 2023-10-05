<?php
include_once("../conexiondb/conexion_registro.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaza tus estilos CSS aquí -->
    <link rel="stylesheet" href="../css/styleeb.css">
    <link rel="stylesheet" type="text/css" href="../css/styleBuscar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Buscar Partida</title>
     <!-- Favicon - FIS -->
     <link rel="shortcut icon" href="../img/iglesia.png">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <span class="system-title">Sistema de Partidas</span>
        </div>
        <div class="col-md-12 text-center mt-4">
           <button class="custom-button" onclick="redirectToPhp()" style="background-color: #3195b3; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px; font-size: 16px; font-weight: bold;">
              <i class="fas fa-arrow-left"></i> Volver
           </button>
        </div>
    </nav>

    <script>
        function redirectToPhp() {
            // Cambiar la ubicación del navegador a la página PHP deseada
            window.location.href = '../principal.php';
        }
    </script>

    <nav class="navbar" id="consulta-bar">
        <div class="nav-container">
            <span class="system-title">Consulta de Sacramentos</span>
        </div>
    </nav>

    <div class="content">
        <div class="container" id="busqueda-container">
            <form>
                <h2>Buscar Partida</h2>
                <input type="text" id="busqueda" placeholder="Ingrese nombre o apellido">
                <button type="button" onclick="buscar()">Buscar</button>
            </form>
        </div>
    </div>
</body>
</html>
