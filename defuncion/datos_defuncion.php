<?php include_once("../conexiondb/conexion_registro.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style_datos.css">
  <title>Formulario de Defuncion</title>
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

    <h1>Formulario de Defuncion</h1>
    <form action="../Bautismo/procesarBautismo.php" method="post">
        <h2>Datos de la persona</h2>
        
<!-- Agregar una fila para libro, folio y número -->
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

        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" name="nombre_completo" required><br>
        
        <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
        <input type="text" name="lugar_nacimiento" required><br>

        <label for="hija_de">Hija de:</label>
        <input type="text" name="hija_de" required><br>

        <div class="form-row">
    <label for="estado_civil">Estado Civil:</label>
    <div class="select-wrapper">
        <select name="estado_civil" required>
            <option value="" disabled selected style="display:none;">Selecciona una opción</option>
            <option value="Soltero"> Soltero</option>
            <option value="Casado"> Casado</option>
            <option value="Viudo"> Viudo</option>
            <option value="Divorciado"> Divorciado</option>
        </select>
    </div>
</div>
        <label for="de">De:</label>
        <input type="text" name="de" required><br>

        <label for="causa_muerte">Causa de muerte:</label>
        <input type="text" name="causa_muerte" required><br>

     <br><label for="fecha_muerte">Fecha de muerte:</label>
        <div class="date-container">
          <input type="date" name="fecha_muerte" id="fecha_muerte" required>
          <input type="checkbox" id="manual_muerte" onchange="toggleManualInput('manual_muerte', 'manual_fecha_muerte')">
          <input class="manual-input" type="text" id="manual_fecha_muerte" placeholder="Ingresar como texto" disabled>
        </div>


        <label for="edad">Edad:</label>
        <input type="text" name="edad" required><br>

        <!-- <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br> -->

        <label for="sepultada_en">Sepultada en:</label>
        <input type="text" name="sepultada_en" required><br>
        <br>
<label for="fecha_sepultura">Fecha de sepultura:</label>
<div class="date-container">
    <input type="date" name="fecha_sepultura" id="fecha_sepultura" required>
    <input type="checkbox" id="manual_sepultura" onchange="toggleManualInput('manual_sepultura', 'manual_fecha_sepultura')">
    <input class="manual-input" type="text" id="manual_fecha_sepultura" placeholder="Ingresar como texto" disabled>
</div>
        <label for="id_padre_da_fe">Da fe:</label>
        <input type="text" name="id_padre_da_fe" required><br>      

        <br><input type="submit" value="Registrar Defuncion">
    </form>
</body>
<script>
    function toggleManualInput(checkboxId, inputId) {
        var checkbox = document.getElementById(checkboxId);
        var manualInput = document.getElementById(inputId);
        manualInput.disabled = !checkbox.checked;
    }
</script>

</body>
</html>
