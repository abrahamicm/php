<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

function excelToText($excelFileName)
{
    $excelFilePath = __DIR__ . '/' . $excelFileName;

    if (!file_exists($excelFilePath)) {
        die("El archivo Excel '$excelFileName' no existe en el mismo directorio que este script.");
    }

    $spreadsheet = IOFactory::load($excelFilePath);

    foreach ($spreadsheet->getAllSheets() as $sheetIndex => $sheet) {
        $textData = '';

        // Agregar el nombre de la hoja al archivo de texto (en minúsculas y sin espacios)
        $sheetName = str_replace(' ', '_', strtolower($sheet->getTitle()));
        $textFileName = __DIR__ . '/' . ($sheetIndex + 1) . '_' . $sheetName . '.txt';

        foreach ($sheet->getRowIterator() as $row) {
            $rowData = [];
            foreach ($row->getCellIterator() as $cell) {
                $rowData[] = $cell->getValue();
            }
            $textData .= implode("\t", $rowData) . PHP_EOL;
        }

        // Sustituir guiones bajos por espacios en blanco
        $textData = str_replace('_', ' ', $textData);

        file_put_contents($textFileName, $textData);

        echo "Hoja $sheetIndex convertida a $textFileName" . PHP_EOL;
    }
}

$excelFileName = 'php.xlsx';

excelToText($excelFileName);
?>
