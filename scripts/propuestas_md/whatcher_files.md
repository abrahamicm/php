```php
<?php

// Interfaz observable para el monitoreo de archivos
interface FileObservable {
    public function addObserver(FileObserver $observer);
    public function removeObserver(FileObserver $observer);
    public function notifyObservers(string $filePath, string $event);
}

// Interfaz para los objetos que observan cambios en los archivos
interface FileObserver {
    public function update(string $filePath, string $event);
}

// Clase base para los comandos que encapsulan acciones específicas
abstract class FileChangeCommand {
    abstract public function execute(string $filePath);
}

// Clase que implementa la lógica principal de monitoreo de archivos
class FileWatcher implements FileObservable {
    private $observers = [];
    private $callbackManager;

    public function __construct(CallbackManager $callbackManager) {
        $this->callbackManager = $callbackManager;
    }

    public function addObserver(FileObserver $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(FileObserver $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers(string $filePath, string $event) {
        foreach ($this->observers as $observer) {
            $observer->update($filePath, $event);
        }
    }

    public function startWatching(string $directory) {
        // Lógica de monitoreo de archivos aquí...
        // Cuando se detecta un cambio, notificar a los observadores.
        $this->notifyObservers($filePath, $event);
    }
}

// Clase que gestiona las acciones (callbacks) que deben ejecutarse
class CallbackManager {
    private $commands = [];

    public function addCommand(FileChangeCommand $command) {
        $this->commands[] = $command;
    }

    public function executeCommands(string $filePath) {
        foreach ($this->commands as $command) {
            $command->execute($filePath);
        }
    }
}

// Implementación de un observador que ejecuta comandos específicos
class FileChangeObserver implements FileObserver {
    private $callbackManager;

    public function __construct(CallbackManager $callbackManager) {
        $this->callbackManager = $callbackManager;
    }

    public function update(string $filePath, string $event) {
        echo "Archivo $event: $filePath\n";
        $this->callbackManager->executeCommands($filePath);
    }
}

// Implementación de un comando específico
class ExampleCommand extends FileChangeCommand {
    public function execute(string $filePath) {
        echo "Ejecutando comando para el archivo: $filePath\n";
        // Lógica específica del comando aquí...
    }
}

?>
```

Luego, puedes utilizar estas clases de la siguiente manera:

```php
<?php

// Crear objetos necesarios
$callbackManager = new CallbackManager();
$fileWatcher = new FileWatcher($callbackManager);
$fileObserver = new FileChangeObserver($callbackManager);
$exampleCommand = new ExampleCommand();

// Agregar el observador al monitor de archivos
$fileWatcher->addObserver($fileObserver);

// Agregar comandos al CallbackManager
$callbackManager->addCommand($exampleCommand);

// Iniciar el monitoreo de archivos
$fileWatcher->startWatching(__DIR__);

?>
```
