<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
     body {
      background-color: #53758d14; /* Color de fondo deseado */
    }
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 20px;
}

#center-link {
    text-align: center;
}

/* Estilos de la cuadrícula de iglesias */
.iglesias-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    padding: 20px;
}


/* Estilo para los cuadros de iglesias */
.iglesia {
    background-color: #6e94bf0a;
    border: 1px solid #2875a8;
    color: white; /* Cambia el color del texto a blanco para que sea legible */
    padding: 20px; /* Añade espaciado interno para separar el contenido del borde */
    text-align: center; /* Centra el contenido en el cuadro */
    border-radius: 10px; /* Agrega bordes redondeados al cuadro */
    margin: 10px; /* Añade margen entre los cuadros */
    transition: transform 0.2s;
    
}

/* Cambia el color de fondo cuando se pasa el mouse por encima del cuadro */
.iglesia:hover {
    background-color: #4a7b9b35; /* Cambia a un tono más oscuro de azul al pasar el mouse */
}



/* Estilo para los enlaces sin visitar */
a:link {
    color: #56728f; /* Color azul claro (puedes ajustar el valor según tu preferencia) */
    text-decoration: none; /* Quita la subrayado predeterminado de los enlaces */
}

/* Estilo para los enlaces visitados */
a:visited {
    color: #3498db; /* Color azul claro (puedes ajustar el valor según tu preferencia) */
}

/* Estilo para los enlaces cuando se les pasa el mouse por encima */
a:hover {
    color: #2980b9; /* Cambia el color cuando el mouse está sobre el enlace */
}

/* Estilo para los enlaces cuando están activos (haciendo clic) */
a:active {
    color: #3498db; /* Cambia el color cuando se hace clic en el enlace */
}
/* Estilo para las imágenes dentro de los cuadros de iglesias */
.iglesia img {
    max-width: 100%; /* Establece el ancho máximo de la imagen al 100% del contenedor */
    height: auto; /* Ajusta automáticamente la altura para mantener la proporción */
}

/* Estilo para el título */
h4 {
    text-align: center; /* Centra el título horizontalmente */
    background-color: #3498db; /* Cambia el color de fondo a azul claro */
    color: white; /* Cambia el color del texto a blanco para que sea legible */
    padding: 10px; /* Agrega espaciado interno alrededor del título */
    font-size: 24px; /* Ajusta el tamaño de fuente a 24px (puedes cambiar el valor según tu preferencia) */
    font-weight: bold; /* Hace que el texto sea negrita */
}



</style>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li id="center-link"><a href="#">Sistema de Partidas</a></li>
                <li><a href="#">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
   
    <h4>VICARÍA DE SAN SEBASTÍAN</h4>
    
    <main>
    <div class="iglesias-grid">
            <!-- Cuadros con nombres de iglesias y fotos con enlaces -->
            <!-- VICARÍA DE SAN SEBASTÍAN -->
            <a href="iglesia1.html" class="iglesia">
                <img src="../img/NUESTRA_SEÑORA_DEL _CARMEN.png" alt="Iglesia 1">
                <h3>PARROQUIA NUESTRA SEÑORA DEL CARMEN - MUTATÁ</h3>
            </a>
            <a href="iglesia2.html" class="iglesia">
            <img src="../img/iglesia.png" alt="Iglesia 2">
                <h3>PARROQUIA DIVINA PROVIDENCIA</h3>
            </a>
            <a href="iglesia3.html" class="iglesia">
                <img src="iglesia3.jpg" alt="Iglesia 3">
                <h3>PARROQUIA NUESTRA SEÑORA DE BELÉN</h3>
            </a>
            <a href="iglesia4.html" class="iglesia">
                <img src="iglesia4.jpg" alt="Iglesia 4">
                <h3>PARROQUIA SAN SEBASTIÁN</h3>
            </a>
            <a href="iglesia5.html" class="iglesia">
                <img src="iglesia5.jpg" alt="Iglesia 5">
                <h3>PARROQUIA DIVINO NIÑO JESÚS</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 6">
                <h3>PARROQUIA MARÍA AUXILIADORA</h3>
            </a>
            <a href="iglesia1.html" class="iglesia">
                <img src="iglesia1.jpg" alt="Iglesia 7">
                <h3>PARROQUIA SAN PEDRO CLAVER</h3>
            </a>
            <a href="iglesia2.html" class="iglesia">
                <img src="iglesia2.jpg" alt="Iglesia 8">
                <h3>PARROQUIA SAN ISIDRO LABRADOR - CAREPA</h3>
            </a>
            <a href="iglesia3.html" class="iglesia">
                <img src="iglesia3.jpg" alt="Iglesia 9">
                <h3>PARROQUIA SAN MARTÍN DE PORRES</h3>
            </a>
            <a href="iglesia4.html" class="iglesia">
                <img src="iglesia4.jpg" alt="Iglesia 10">
                <h3>PARROQUIA NUESTRA SEÑORA DE GUADALUPE</h3>
            </a>
            <a href="iglesia5.html" class="iglesia">
                <img src="iglesia5.jpg" alt="Iglesia 11">
                <h3>PARROQUIA LA ANUNCIACIÓN</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 12">
                <h3>PARROQUIA NUESTRA SEÑORA DEL CARMEN - RIOSUCIO – CHOCÓ</h3>
            </a>
            <a href="iglesia1.html" class="iglesia">
                <img src="iglesia1.jpg" alt="Iglesia 13">
                <h3>PARROQUIA NIÑA MARÍA</h3>
            </a>

            <!-- VICARÍA  NUESTRA SEÑORA DEL CARMEN -->

            <a href="iglesia2.html" class="iglesia">
                <img src="iglesia2.jpg" alt="Iglesia 14">
                <h3>PARROQUIA SAGRADO CORAZÓN DE JESÚS</h3>
            </a>
            <a href="iglesia3.html" class="iglesia">
                <img src="iglesia3.jpg" alt="Iglesia 15">
                <h3>PARROQUIA SAN FRANCISCO DE ASÍS</h3>
            </a>
            <a href="iglesia4.html" class="iglesia">
                <img src="iglesia4.jpg" alt="Iglesia 16">
                <h3>PARROQUIA DIVINA EUCARISTÍA</h3>
            </a>
            <a href="iglesia5.html" class="iglesia">
                <img src="iglesia5.jpg" alt="Iglesia 17">
                <h3>PARROQUIA LA INMACULADA CONCEPCIÓN</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 18">
                <h3>PARROQUIA LA CATEDRAL SANTA MARÍA DE LA ANTIGUA DEL DARIÉN</h3>
            </a>
            <a href="iglesia1.html" class="iglesia">
                <img src="iglesia1.jpg" alt="Iglesia 19">
                <h3>PARROQUIA DIVINO ECCE HOMO, APARTADÓ</h3>
            </a>
            <a href="iglesia2.html" class="iglesia">
                <img src="iglesia2.jpg" alt="Iglesia 20">
                <h3>PARROQUIA SAN FERNANDO REY </h3>
            </a>
            <a href="iglesia3.html" class="iglesia">
                <img src="iglesia3.jpg" alt="Iglesia 21">
                <h3>PARROQUIA SAN JOSÉ OBRERO</h3>
            </a>
            <a href="iglesia4.html" class="iglesia">
                <img src="iglesia4.jpg" alt="Iglesia 22">
                <h3>PARROQUIA SAN JUAN PABLO II</h3>
            </a>
            <a href="iglesia5.html" class="iglesia">
                <img src="iglesia5.jpg" alt="Iglesia 23">
                <h3>CENTRO DE CULTO DIVINO SALVADOR</h3>
            </a>

            <!-- VICARÍA  NUESTRA SEÑORA DEL CARMEN -->
            
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 24">
                <h3>PARROQUIA SAN JOSÉ</h3>
            </a>
            <a href="iglesia1.html" class="iglesia">
                <img src="iglesia1.jpg" alt="Iglesia 25">
                <h3>PARROQUIA SANTA CRUZ</h3>
            </a>
            <a href="iglesia2.html" class="iglesia">
                <img src="iglesia2.jpg" alt="Iglesia 26">
                <h3>PARROQUIA MARÍA AUXILIADORA</h3>
            </a>
            <a href="iglesia3.html" class="iglesia">
                <img src="iglesia3.jpg" alt="Iglesia 27">
                <h3>PARROQUIA SANTÍSIMA TRINIDAD - EL TRES</h3>
            </a>
            <a href="iglesia4.html" class="iglesia">
                <img src="iglesia4.jpg" alt="Iglesia 28">
                <h3>PARROQUIA SANTÍSIMA TRINIDAD - TURBO</h3>
            </a>
            <a href="iglesia5.html" class="iglesia">
                <img src="iglesia5.jpg" alt="Iglesia 29">
                <h3>PARROQUIA NUESTRA SEÑORA DEL CARMEN - TURBO</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 30">
                <h3>PARROQUIA DIVINO NIÑO JESÚS</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 31">
                <h3>PARROQUIA DIVINO ECCE HOMO</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 32">
                <h3>PARROQUIA SEÑOR DE LOS MILAGROS</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 33">
                <h3>CENTRO DE CULTO SAGRADO CORAZÓN DE JESÚS</h3>
            </a>

            <!-- VICARÍA SAN JUAN DE LA CRUZ -->


            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 34">
                <h3>PARROQUIA SAN PEDRO APÓSTOL</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 35">
                <h3>PARROQUIA SANTA TERESITA DEL NIÑO JESÚS</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 36">
                <h3>PARROQUIA ESPÍRITU SANTO</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 37">
                <h3>PARROQUIA NUESTRA SEÑORA DEL CARMEN - NECOCLÍ</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 38">
                <h3>PARROQUIA SAN ANTONIO DE PADUA</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 39">
                <h3>PARROQUIA SAN JUAN DE LA CRUZ</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 40">
                <h3>PARROQUIA INMACULADA CONCEPCIÓN</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 41">
                <h3>PARROQUIA NUESTRA SEÑORA DE LA CANDELARIA</h3>
            </a>

            <h4>VICARÍA DE SANTA MARÍA DE LA ANTIGUA CHOCÓ </h4>


            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 42">
                <h3>PARROQUIA SAGRADA FAMILIA</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 43">
                <h3>PARROQUIA SAN PEDRO APÓSTOL</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 44">
                <h3>PARROQUIA SAN ISIDRO LABRADOR, BALBOA – CHOCÓ</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 45">
                <h3>PARROQUIA NUESTRA SEÑORA DEL CARMEN, ACANDÍ – CHOCÓ</h3>
            </a>
            <a href="iglesia6.html" class="iglesia">
                <img src="iglesia6.jpg" alt="Iglesia 46">
                <h3>PARROQUIA NUESTRA SEÑORA DEL CARMEN, CAPURGANÁ – CHOCÓ</h3>
            </a>

        </div>
    </main>

    
</body>
</html>