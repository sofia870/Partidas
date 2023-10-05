<?php include_once ('conexiondb/conexion_registro.php');?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Partidas</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<style>
    body {
      background-color: #53758d14; /* Color de fondo deseado */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container" style="margin-top: 0;">
      <div class="navbar-text mx-auto">Sistema de Partidas</div>
    </div>
  </nav>

<div class="container">
  <div class="row" data-aos="zoom-in" data-aos-delay="250">
    <!-- Cuadros -->
<?php 
$partida="select * from tipo_sacramento where id_sacramento='$tipo'";
$ejecutar=mysqli_query($conn,$partida);
while ($fila = mysqli_fetch_array( $ejecutar)){

?>
    <div class="col-lg-6 col-md-6">
      <div class="card custom-card">
        <a href="registros/registro.php?tipo=<?php echo $fila['id_sacramento'] ?>">
            <div class="card-body text-center">
                <i class="ri-bar-chart-box-line ri-3x"></i>
                <h3 class="card-title" ><?php echo $fila['descripcion']  ?></h3>
          </div>
        </a>
      </div>
    </div>
    <?php 
    }
    ?>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
