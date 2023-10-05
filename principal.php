
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Partidas</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style_principal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Favicon - FIS -->
   <link rel="shortcut icon" href="img/iglesia.png">
  <style>
    body {
      background-color: #53758d14; /* Color de fondo deseado */
    }
  </style>
</head>
<body>
<nav class="navbar">
        <div class="nav-container">
            <span class="system-title">Sistema de Partidas</span>
        </div>

        <div class="col-md-12 text-center mt-4"><br>
          <a href="index.php" class="custom-button" style="background-color: #3195b3; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px; font-size: 19px; font-weight: bold;">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar" id="consulta-bar">
    <div class="nav-container">
        <span class="system-title">Santa Cruz - Currulao</span>
        <div class="centered-container">
            <span class="system-subtitle">Presbítero Juan Perez</span>
        </div>
    </div>
</nav>



  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 1  -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="registrarPartida.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Registrar Partida</h3>
            </div>
          </a>
        </div>
      </div>

      <!-- Cuadro 2 -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="buscar/buscar.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Buscar Partida</h3>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 3 -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="boletin/boletin.php">
            <div class="card-body text-center">
              <i class="ri-calendar-todo-line ri-3x"></i>
              <h3 class="card-title">Boleta de Partidas</h3>
            </div>
          </a>
        </div>
      </div>

      <!-- Cuadro 4 -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="certificado_negativo/certificadoNegativo.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Certificado Negativo</h3>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 5 -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="utilidades/utilidades.php">
            <div class="card-body text-center">
              <i class="ri-paint-brush-line ri-3x"></i>
              <h3 class="card-title">Utilidades</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
