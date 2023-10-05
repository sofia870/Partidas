<?php include_once("../conexiondb/conexion_registro.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_presbitero.css">
    <title>PresbÍtero</title>
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

  <h1>Formulario de PresbÍtero</h1>

  <form action="procesar_formulario.php" method="POST">
    
    <label for="nombre_completo">Nombre PresbÍtero:</label>
    <input type="text" name="nombre_completo" required><br>

    <label for="id_iglesia">Iglesia:</label>
    <input type="number" name="id_iglesia" required><br>

   
  <br><input type="submit" value="Registrar PresbÍtero">
  </form>
  <div id="mensaje"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault(); // Evita la recarga de página

        // Obtener los datos del formulario
        var nombre_presbitero = $("input[name='nombre_completo']").val();
        var id_iglesia = $("input[name='id_iglesia']").val();

        // Enviar los datos al archivo procesar_formulario.php a través de AJAX
        $.ajax({
            type: "POST",
            url: "procesar_formulario.php",
            data: {
                nombre_completo: nombre_presbitero,
                id_iglesia: id_iglesia
            },
            success: function(response) {
                // Mostrar el mensaje de éxito o error en el div "mensaje"
                $("#mensaje").html(response);
            }
        });
    });
});

    function redirectToPhp() {
      // Cambiar la ubicación del navegador a la página PHP deseada
      window.location.href = 'utilidades.php';
    }
  </script>
</body>
</html>
