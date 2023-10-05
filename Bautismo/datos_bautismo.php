<?php include_once("../conexiondb/conexion_registro.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- Enlaza tus estilos CSS aquí -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_datos.css">
    <title>Formulario de Bautismo</title>
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

    <h1>Formulario de Bautismo</h1>
    <form >
        <h2>Datos de la Partida</h2>
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
  
        <label for="fecha_bautismo">Fecha de Bautismo:</label>
            <div class="date-container">
                <input type="date" name="fecha_bautismo" id="fecha_bautismo" required >
                <input type="checkbox" id="manual_bautismo" onchange="toggleManualInputBautismo()"> 
                <input class="manual-input" type="text" id="manual_fecha_bautismo" placeholder="Ingresar como texto" disabled>
            </div>

        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" name="nombre_completo" required><br>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <div class="date-container">
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
            <input type="checkbox" id="manual_nacimiento" onchange="toggleManualInput()"> 
            <input class="manual-input" type="text" id="manual_fecha_nacimiento" placeholder="Ingresar como texto" disabled>
        </div>

        <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
        <input type="text" name="lugar_nacimiento" required><br>

        <label for="hijo_de">Hijo de:</label>
        <input type="text" name="hijo_de" required><br>

        <label for="abuelos_paternos">Abuelos Paternos:</label>
        <input type="text" name="abuelos_paternos" required><br>

        <label for="abuelos_maternos">Abuelos Maternos:</label>
        <input type="text" name="abuelos_maternos" required><br>

        <label for="padrinos">Padrinos:</label>
        <input type="text" name="padrinos" required><br>

        <label for="id_padre_ministro">Ministro:</label>
        <input type="text" name="id_padre_ministro" required><br>  

        <label for="id_padre_da_fe">Da fe:</label>
        <input type="text" name="id_padre_da_fe" required><br>  


        <br><input type="submit" value="Registrar Bautismo">
    </form>

   <script>
    function toggleManualInput() {
      var checkbox = document.getElementById("manual_nacimiento");
      var manualInput = document.getElementById("manual_fecha_nacimiento");

      manualInput.disabled = !checkbox.checked;
    }

    function toggleManualInputBautismo() {
      var checkbox = document.getElementById("manual_bautismo");
      var manualInput = document.getElementById("manual_fecha_bautismo");

      manualInput.disabled = !checkbox.checked;
    }
  </script>
</body>
</html>