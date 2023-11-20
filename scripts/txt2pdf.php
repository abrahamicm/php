<?php
require 'vendor/autoload.php';
require 'vendor/tecnickcom/tcpdf/tcpdf.php';

function txtToPdf($txtFileName)
{
    $txtFilePath = __DIR__ . '/' . $txtFileName;

    if (!file_exists($txtFilePath)) {
        die("El archivo de texto '$txtFileName' no existe en el mismo directorio que este script.");
    }

    // Crear una instancia de TCPDF
    $pdf = new TCPDF();

    // Agregar una nueva página al PDF
    $pdf->AddPage();

    // Configurar la fuente
    $pdf->SetFont('helvetica', '', 14);

    // Leer el contenido del archivo de texto
    $txtContent = file_get_contents($txtFilePath);

    // Agregar el contenido del archivo de texto al PDF
    $pdf->MultiCell(0, 10, $txtContent);

    // Guardar el PDF en el mismo directorio con el mismo nombre que el archivo de texto, pero con extensión ".pdf"
    $pdfFileName = pathinfo($txtFilePath, PATHINFO_FILENAME) . '.pdf';
    $pdfFilePath = __DIR__ . '/' . $pdfFileName;
    $pdf->Output($pdfFilePath, 'F');

    echo "Archivo de texto '$txtFileName' convertido a '$pdfFileName'" . PHP_EOL;
}

// Obtener la lista de archivos en el directorio actual con extensión .txt
$txtFiles = glob(__DIR__ . '/*.txt');

foreach ($txtFiles as $txtFile) {
    // Convertir cada archivo de texto a PDF
    txtToPdf(basename($txtFile));
}
?>
