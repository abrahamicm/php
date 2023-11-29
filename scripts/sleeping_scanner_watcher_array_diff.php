<?php

$scriptDirectory = __DIR__;
$interval = 5; // segundos

$files = getFiles($scriptDirectory);

while (true) {
    $newFiles = getFiles($scriptDirectory);

    $addedFiles = array_diff($newFiles, $files);
    $removedFiles = array_diff($files, $newFiles);

    if (!empty($addedFiles)) {
        foreach ($addedFiles as $addedFile) {
            echo "Archivo creado/modificado: $addedFile\n";
        }
    }

    if (!empty($removedFiles)) {
        foreach ($removedFiles as $removedFile) {
            echo "Archivo eliminado: $removedFile\n";
        }
    }

    $files = $newFiles;

    sleep($interval);
}

function getFiles($directory) {
    $files = [];
    $entries = scandir($directory);

    foreach ($entries as $entry) {
        $filePath = $directory . DIRECTORY_SEPARATOR . $entry;

        if (is_file($filePath)) {
            $files[] = $filePath;
        }
    }

    return $files;
}
?>
