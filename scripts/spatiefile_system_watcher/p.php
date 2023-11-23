<?php
require 'vendor/autoload.php';
use Spatie\Watcher\Watch;

$directory = getcwd();
Watch::path($directory)
    ->onAnyChange(function (string $type, string $path) {
        if ($type === Watch::EVENT_TYPE_FILE_CREATED) {
            echo "file {$path} was created";
        }
    })
    ->start();