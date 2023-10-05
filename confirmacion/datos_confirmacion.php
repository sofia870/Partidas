<?php include_once("../conexiondb/conexion_registro.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- Enlaza tus estilos CSS aquí -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_datos.css">
    <title>Formulario de Confirmacion</title>
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
        </nav>
        
  <script>
    function redirectToPhp() {
      // Cambiar la ubicación del navegador a la página PHP deseada
      window.location.href = '../registrarPartida.php';
    }
  </script>

    <h1>Formulario de Confirmación</h1>
    <form action="../Bautismo/procesarBautismo.php" method="post">
        <h2>Datos de la persona</h2>

        <div class="fila-cuadros">
          <div class="campo">
            <label for="libro">Libro:</label>
            <input type="text" name="libro" required>
          </div>
          
          <div class="campo">
            <label for="folio">Folio:</label>
            <input type="text" name="folio" required>
          </div>
          
          <div class="campo">
            <label for="numero">Número:</label>
            <input type="text" name="numero" required>
          </div>
        </div>

        <br><label for="confirmado_a">Confirmado a:</label>
        <div class="date-container">
          <input type="date" name="confirmado_a" id="confirmado_a" required>
          <input type="checkbox" id="manual_confirmado_a" onchange="toggleManualInput('manual_confirmado_a', 'manual_confirmado_fecha')">
          <input class="manual-input" type="text" id="manual_confirmado_fecha" placeholder="Ingresar como texto" disabled>
        </div>

        <!-- <label for="confirmado_a">Confirmado a:</label>
        <input type="text" name="confirmado_a" required><br> -->

        <label for="nombre_completo">Nombre completo:</label>
        <input type="text" name="nombre_completo" required><br>

        <label for="edad">Edad:</label>
        <input type="text" name="edad" required><br>

        <label for="hijo_de">Hijo de:</label>
        <input type="text" name="hijo_de" required><br>

        <label for="confirmado_por">Confirmado por:</label>
        <input type="text" name="confirmado_por" required><br>
        
        <label for="padrino">Padrino:</label>
        <input type="text" name="padrino" required><br>
       
        <label for="bautizado_en">Bautizado en:</label>
        <input type="text" name="bautizado_en" required><br>

        <label for="id_padre_da_fe">Da fe:</label>
        <input type="text" name="id_padre_da_fe" required><br>

        <label for="parroquia_confirmacion">Parroquia de Confirmación:</label>
        <input type="text" name="parroquia_confirmacion" required><br>

        <br><input type="submit" value="Registrar Confirmación">
    </form>

    <script>
    function toggleManualInput(checkboxId, inputId) {
        var checkbox = document.getElementById(checkboxId);
        var manualInput = document.getElementById(inputId);
        manualInput.disabled = !checkbox.checked;
    }
</script>
</body>
</html>
