<?php include_once("../conexiondb/conexion_registro.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- Enlaza tus estilos CSS aquí -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_datos.css">
    <title>Formulario de Matrimonio</title>
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
    
    <h1>Formulario de Matrimonio</h1>
    <form action="../Bautismo/procesarBautismo.php" method="post">
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
        
        <br><label for="a">A:</label>
        <div class="date-container">
          <input type="date" name="a" id="a" required>
          <input type="checkbox" id="manual_a" onchange="toggleManualInput('manual_a', 'manual_fecha_a')">
          <input class="manual-input" type="text" id="manual_fecha_a" placeholder="Ingresar como texto" disabled>
        </div>

       <!--  <label for="a">A:</label>
        <input type="text" name="a" required><br> -->

        <label for="id_presbitero">Presbítero:</label>
        <input type="text" name="id_presbitero" required><br>
        
        <label for="contrajo">Contrajo:</label>
        <input type="text" name="contrajo" required><br>

        <div class="form-row">
    <label for="estadoCivil">Estado Civil:</label>
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
        
        <label for="hijo_de">Hijo de:</label>
        <input type="text" name="hijo_de" required><br>

        <label for="bautizadoEn">Bautizado en:</label>
        <input type="text" name="bautizadoEn" required><br>

        <label for="fechaBautismo">Fecha de Bautismo:</label>
        <div class="date-container">
          <input type="date" name="fechaBautismo" id="fechaBautismo" required>
          <input type="checkbox" id="manualBautismo" onchange="toggleManualInput('manualBautismo', 'manualFechaBautismo')">
          <input class="manual-input" type="text" id="manualFechaBautismo" placeholder="Ingresar como texto" disabled>
        </div>

        <h2>Datos del Matrimonio</h2>
        <label for="con">Con:</label>
        <input type="text" name="con" required><br>

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

        
        <!-- <label for="estado_civil">Estado civil:</label>
        <input type="text" name="estado_civil" required><br> -->

        <label for="hija_de">Hija de:</label>
        <input type="text" name="hija_de" required><br>

        <label for="bautizada_en">Bautizada en:</label>
        <input type="text" name="bautizada_en" required><br>

       <label for="fecha_bautismo">Fecha de Bautismo:</label>
        <div class="date-container">
          <input type="date" name="fecha_bautismo" id="fecha_bautismo" required>
          <input type="checkbox" id="manual_bautismo" onchange="toggleManualInput('manual_bautismo', 'manual_fecha_bautismo')">
          <input class="manual-input" type="text" id="manual_fecha_bautismo" placeholder="Ingresar como texto" disabled>
        </div>

        <label for="testigos">Testigos:</label>
        <input type="text" name="testigos" required><br>

        <label for="parroquia">Parroquia:</label>
        <input type="text" name="parroquia" required><br>

        <label for="id_padre_da_fe ">Da fe :</label>
        <input type="text" name="id_padre_da_fe " required><br>


       <br><input type="submit" value="Registrar Matrimonio">
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