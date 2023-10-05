
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaza tus estilos CSS aquí -->
    <link rel="stylesheet" href="../css/styleBoletin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Boleta de Partidas</title>
 <!-- Favicon - FIS -->
 <link rel="shortcut icon" href="../img/iglesia.png">

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

    <div class="center-container">
        <button onclick="mostrarRegistrarSacramento()">Registrar Sacramento</button>
        <button onclick="mostrarBuscarSacramentos()">Buscar Sacramentos Registrados</button>
    </div>

    <div id="contenido">

    </div>


    <script>
        function mostrarRegistrarSacramento() {
            // Verificar si ya hay contenido en la sección "contenido"
            const contenidoExistente = document.getElementById('contenido').innerHTML;
            if (!contenidoExistente.includes("Registrar Sacramento")) {
                // Define el contenido solo si no está presente
                const contenidoHTML = `
                <h2>Registrar Sacramento</h2>
                <!-- Agrega aquí el formulario o contenido relacionado -->
                <br><br><br>
                <div class="container">
                    <div class="info-cuadro">
                    <form id="registroForm" method="post">
                        <h2 class="titulo-centrado">Información del Sacramento</h2>
                        <div class="formulario">

                        <div class="form-group">
                            <label for="nombre" style="font-size: 17px; font-weight: bold;">
                            <span>Nombre Completo:</span>
                            <input type="text" id="nombre" name="nombre" required style="font-size: 16px; width: 215px; height: 15px;">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="sacramento" style="font-size: 17px; font-weight: bold;">
                            <span>Tipo de Sacramento:</span>
                            <select id="sacramento" name="sacramento" required style="font-size: 17px; width: 250px; height: 30px;">
                                <option value="">Seleccionar...</option> <!-- Espacio en blanco -->
                                <option value="Bautismo">Bautismo</option>
                                <option value="Primera comunión">Primera comunión</option>
                                <option value="Confirmación">Confirmación</option>
                                <option value="Matrimonio">Matrimonio</option>
                                <option value="Defunción">Defunción</option>
                            </select>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="fecha" style="font-size: 17px; font-weight: bold;">
                            <span>Fecha del Sacramento:</span>
                            <input type="date" id="fecha" name="fecha" required style="font-size: 17px; width: 220px; height: 30px;">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="lugar" style="font-size: 17px; font-weight: bold;">
                            <span>Lugar del Sacramento:</span>
                            <input type="text" id="lugar" name="lugar" required style="font-size: 16px; width: 215px; height: 15px;">
                            </label>
                        </div>
                        
                        <div class="form-group text-center">
                            <input type="submit" value="Registrar" class="btn btn-primary">
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                `;

                // Actualiza el contenido en la sección "contenido"
                document.getElementById('contenido').innerHTML = contenidoHTML;
            }
        }

        function mostrarBuscarSacramentos() {
            // Verificar si ya hay contenido en la sección "contenido"
            const contenidoExistente = document.getElementById('contenido').innerHTML;
            if (!contenidoExistente.includes("Buscar Sacramentos Registrados")) {
                // Define el contenido solo si no está presente
                const contenidoHTML = `
                <h2>Buscar Sacramentos Registrados</h2>
                <div class="formulario">
                <form id="buscarForm" method="post" action="buscar_sacramentos.php">
                        <div class="form-group">
                            <label for="fechaBusqueda" style="font-size: 17px; font-weight: bold;">
                                <span>Fecha de Búsqueda:</span>
                                <input type="date" id="fechaBusqueda" name="fechaBusqueda" required style="font-size: 18px; width: 215px; height: 30px;">
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Buscar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <!-- Agrega aquí la sección para mostrar los resultados de la búsqueda -->
                <div id="resultadosBusqueda"></div>
                
                `;

            function redirectToPhp() {
            const nombre = document.getElementById('nombre').value;
            const sacramento = document.getElementById('sacramento').value;
            const fecha = document.getElementById('fecha').value;
            const lugar = document.getElementById('lugar').value;
            
            console.log("Nombre: " + nombre);
            console.log("Sacramento: " + sacramento);
            console.log("Fecha: " + fecha);
            console.log("Lugar: " + lugar);

            // Realizar la solicitud AJAX al archivo PHP de registro
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Mostrar la respuesta del servidor (puede ser un mensaje de éxito o error)
                    alert(xhr.responseText);
                }
            };

            // Configurar y enviar la solicitud AJAX al archivo "registrar_sacramento.php"
            xhr.open('POST', 'registrar_sacramento.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send(`nombre=${nombre}&sacramento=${sacramento}&fecha=${fecha}&lugar=${lugar}`);
    }


                // Actualiza el contenido en la sección "contenido"
                document.getElementById('contenido').innerHTML = contenidoHTML;

                // Agrega un evento de escucha al formulario para manejar la búsqueda AJAX
                const buscarForm = document.getElementById('buscarForm');
                buscarForm.addEventListener('submit', function (e) {
                    e.preventDefault(); // Evita la recarga de la página
                    const fechaBusqueda = document.getElementById('fechaBusqueda').value;

                    // Realiza la solicitud AJAX
                    const xhr = new XMLHttpRequest();
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // Mostrar los resultados en la sección de resultados
                            document.getElementById('resultadosBusqueda').innerHTML = xhr.responseText; 
                            
                            // Una vez que se han cargado
                            // Una vez que se han cargado los resultados, agrega el botón "Generar PDF"
                            const generarPdfBtn = document.createElement('button');
                            generarPdfBtn.id = 'generarPdfBtn';
                            generarPdfBtn.className = 'btn btn-primary';
                            generarPdfBtn.textContent = 'Descargar PDF';

                            // Agrega un margen superior al botón
                            generarPdfBtn.style.marginTop = '20px'; // Puedes ajustar la cantidad de espacio según tus preferencias

                            // Agrega un evento de escucha al botón para generar el PDF
                            generarPdfBtn.addEventListener('click', function () {
                                // Obtén el contenido HTML de la sección de resultados
                                const resultadosHTML = document.getElementById('resultadosBusqueda').innerHTML;
                                
                                // Aquí puedes agregar el código JavaScript relacionado con la generación de PDF si es necesario
                                // Por ejemplo, usar la biblioteca jsPDF para crear un PDF a partir del contenido HTML
                            });
                            
                            // Agrega el botón al DOM
                            document.getElementById('resultadosBusqueda').appendChild(generarPdfBtn);
                        }
                    };

                    // Configura y envía la solicitud AJAX al archivo "buscar_sacramentos.php"
                    xhr.open('POST', '../boletin/buscar_sacramentos.php', true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.send(`fechaBusqueda=${fechaBusqueda}`);
                });
            }
        }
    </script>
</body>
</html>
