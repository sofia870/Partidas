<?php
// Configura el tipo de contenido para la respuesta HTTP
header('Content-Type: text/html; charset=utf-8');


// Conectar a la base de datos (reemplaza con tus credenciales)
$user = "root";
$pass = "";

$mysqli = new mysqli("localhost", $user, $pass, "dbs_sistema_partidas");

// Verificar la conexión
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8');

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$motivo = $_POST['motivo'];
$sacramento = $_POST['sacramento'];
$parroquia = $_POST['parroquia'];



// Incluir la biblioteca FPDF
require('../fpdf/fpdf.php');

// Crear una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Título de la parroquia
$pdf->Cell(0, 10, $parroquia, 0, 1, 'C');

// Dirección y NIT (Reemplaza con la dirección y NIT real)
$pdf->Cell(0, 10, 'Dirección NIT', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 16);

// Agregar un espacio en blanco
$pdf->MultiCell(0, 10, '', 0, 'C');

// Título del certificado
$pdf->Cell(0, 10, 'CERTIFICADO NEGATIVO', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, '', 0, 1); // Espacio en blanco


$texto_certificado = "El SUSCRITO VICARIO PARROQUIAL DE LA PARROQUIA $parroquia \n\n";


$espacios_antes_certifica = max(0, floor((150 - strlen("CERTIFICA")) / 2)); // Ajusta el valor 190 según tus necesidades
$texto_certificado .= str_repeat(" ", $espacios_antes_certifica) . "CERTIFICA\n";
// Cuerpo del certificado
$texto_certificado .= "Que, después de buscar en los libros $sacramento de esta parroquia, no se encontró la partida de $sacramento del señor $nombre\n\n";
$texto_certificado .= "Motivo: $motivo\n\n"; // Incluye el 'motivo' en el certificado
$texto_certificado .= "Se expide este certificado a petición del interesado.\n\n";
$texto_certificado .= "\n\n";
$texto_certificado .= "Vicario parroquia";

$pdf->MultiCell(0, 10, $texto_certificado);

// Generar el PDF y descargarlo
$pdf->Output('certificado_negativo.pdf', 'D');

// Cerrar la conexión a la base de datos
$mysqli->close();
?>
