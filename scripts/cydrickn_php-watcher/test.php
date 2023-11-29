<?php

require_once './vendor/autoload.php';

$directory = __DIR__;
$filePath = $directory . '/archivo.txt';

// Crea un archivo si no existe
if (!file_exists($filePath)) {
    file_put_contents($filePath, 'Contenido inicial del archivo');
}

$watcher = new \Cydrickn\PHPWatcher\Watcher(
    [$directory],
    [$directory . '/vendor/'],
    function (array $changes) use ($filePath) {
        foreach ($changes as $change) {
            if ($change['type'] === 'updated' && $change['resource'] === $filePath) {
                echo "El archivo '$filePath' ha sido modificado";
            }
        }
    }
);

// Agrega un temporizador para simular cambios en el archivo cada 5 segundos
$loop = React\EventLoop\Loop::get();
$loop->addPeriodicTimer(5, function () use ($filePath) {
    $newContent = 'Contenido modificado del archivo - ' . date('Y-m-d H:i:s');
    file_put_contents($filePath, $newContent);
});

$watcher->tick();
$loop->run();
