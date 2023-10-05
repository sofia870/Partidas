
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_iglesia.css">
    <title>Iglesia</title>
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

  <h1>Formulario de Iglesia</h1>

  <form action="guardar_iglesia.php" method="post">
    <label for="nombre">Nombre Iglesia:</label>
    <input type="text" name="nombre" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" name="direccion" required><br>

    <label for="id_municipio">Municipio:</label>
    <input type="text" name="id_municipio" required><br>

    <input type="submit" value="Registrar Iglesia">
  </form>
  
  <script>
    function redirectToPhp() {
      // Cambiar la ubicación del navegador a la página PHP deseada
      window.location.href = 'utilidades.php';
    }
  </script>
</body>
</html>
