<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar partida</title>
  
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style_registroPartida.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <!-- Favicon - FIS -->
 <link rel="shortcut icon" href="img/iglesia.png">
</head>
<body>
  <!-- Navbar -->
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

  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 1: Bautismo -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="bautismo/datos_bautismo.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Bautismo</h3>
            </div>
          </a>
        </div>
      </div>

      <!-- Cuadro 2: Primera Comunión -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="comunion/datos_comunion.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Primera Comunión</h3>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 3: Confirmación -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="confirmacion/datos_confirmacion.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Confirmación</h3>
            </div>
          </a>
        </div>
      </div>

      <!-- Cuadro 4: Matrimonio -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="matrimonio/datos_matrimonio.php">
            <div class="card-body text-center">
              <i class="ri-calendar-todo-line ri-3x"></i>
              <h3 class="card-title">Matrimonio</h3>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 5: Defunción -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="defuncion/datos_defuncion.php">
            <div class="card-body text-center">
              <i class="ri-paint-brush-line ri-3x"></i>
              <h3 class="card-title">Defunción</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
        function redirectToPhp() {
            // Cambiar la ubicación del navegador a la página PHP deseada
            window.location.href = 'principal.php';
        }
    </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
