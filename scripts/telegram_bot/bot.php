<?php
require_once 'vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

// Configuración del bot
$token = 'YOUR_BOT_TOKEN';
$api = 'https://api.telegram.org/bot' . $token;

// Comienza a escuchar actualizaciones del bot
$client = new Client(new Version2X('http://localhost:3000'));

$client->initialize();
$client->emit('subscribe', ['token' => $token]);

// Maneja las actualizaciones
$client->on('message', function ($data) use ($api) {
    $chat_id = $data['message']['chat']['id'];
    $text = $data['message']['text'];

    // Procesa el mensaje
    if ($text === '/saludo') {
        file_get_contents($api . '/sendMessage?chat_id=' . $chat_id . '&text=¡Hola!');
    } else {
        file_get_contents($api . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($text));
    }
});

$client->on('disconnect', function () {
    echo "Disconnected.\n";
});

$client->on('connect', function () {
    echo "Connected.\n";
});

$client->on('reconnect', function () {
    echo "Reconnected.\n";
});

$client->loop();