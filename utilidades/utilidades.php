<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Utilidades</title>
   <!-- Favicon - FIS -->
   <link rel="shortcut icon" href="../img/iglesia.png">
  
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style_utilidades.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

  <script>
    function redirectToPhp() {
      // Cambiar la ubicación del navegador a la página PHP deseada
      window.location.href = '../principal.php';
    }
  </script>

  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 1 -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="ingresarPresbitero.php"> <!-- Actualiza "ruta-a-tu-archivo.php" con la ruta correcta -->
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Ingresar Presbítero</h3>
              <!-- <p class="card-text">Explore our Bautismo services.</p> -->
            </div>
          </a>
        </div>
      </div>

      <!-- Cuadro 2 -->
      <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="IngresarIglesia.php">
            <div class="card-body text-center">
              <i class="ri-bar-chart-box-line ri-3x"></i>
              <h3 class="card-title">Ingresar Iglesia</h3>
              <!-- <p class="card-text">Learn about our Confirmación offerings.</p> -->
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="250">
      <!-- Cuadro 3 -->
      <!-- <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="matrimonio/datos_matrimonio.php">
            <div class="card-body text-center">
              <i class="ri-calendar-todo-line ri-3x"></i>
              <h3 class="card-title">Matrimonio</h3>
               <p class="card-text">Discover our Matrimonio services.</p> 
            </div>
          </a>
        </div>
      </div> -->

      <!-- Cuadro 4 -->
      <!-- <div class="col-lg-6 col-md-6">
        <div class="card custom-card">
          <a href="defuncion/datos_defuncion.php">
            <div class="card-body text-center">
              <i class="ri-paint-brush-line ri-3x"></i>
              <h3 class="card-title">Defunción</h3>
             <p class="card-text">Explore our Defunción offerings.</p> 
            </div>
          </a>
        </div>
      </div>
    </div>
  </div> -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
