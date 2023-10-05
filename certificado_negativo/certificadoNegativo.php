<?php include_once("../conexiondb/conexion_registro.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/stlyle_nega.css">
    <title>Certificado Negativo</title>
     <!-- Favicon - FIS -->
     <link rel="shortcut icon" href="../img/iglesia.png">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px;">
    <div class="container" style="margin-top: 0;">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="navbar-text">Sistema de Partidas</div>
        </div>
        <div class="col-md-12 text-center mt-4">
           <button class="custom-button" onclick="redirectToPhp()" style="background-color: #3195b3; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px; font-size: 16px; font-weight: bold;">
              <i class="fas fa-arrow-left"></i> Volver
           </button>
        </div>
      </div>
    </div>
  </nav>

  <h1>Certificado Negativo</h1>
  <form action="generar_certificado.php" method="POST" accept-charset="UTF-8">
  <label for="motivo">Motivo:</label>
  <input type="text" name="motivo" required><br>
      
  <label for="parroquia">Parroquia:</label>
    <input type="text" name="parroquia" required><br>

    <label for="nombre">Nombre del destinatario:</label>
    <input type="text" name="nombre" required><br>

    <label for="sacramento">Tipo de partida:</label>
<select name="sacramento" required>
    <option value="" selected disabled>Seleccionar...</option> <!-- Espacio en blanco no seleccionable y seleccionado por defecto -->
    <option value="bautismo">Bautismo</option>
    <option value="primera_comunion">Primera Comunión</option>
    <option value="confirmacion">Confirmación</option>
    <option value="matrimonio">Matrimonio</option>
    <option value="defuncion">Defunción</option>
</select><br>


    <input type="submit" value="Generar Certificado">
</form>




  
  <script>
    function redirectToPhp() {
      // Cambiar la ubicación del navegador a la página PHP deseada
      window.location.href = '../principal.php';
    }
  </script>
</body>
</html>
