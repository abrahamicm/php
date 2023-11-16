
### Command (Comando):

```php
// Interfaz Command
interface Command {
    public function execute();
}

```

### ConcreteCommand (ComandoConcreto):

```php
// ConcreteCommand para abrir un documento
class OpenCommand implements Command {
    private $receiver;

    public function __construct(Document $receiver) {
        $this->receiver = $receiver;
    }

    public function execute() {
        $this->receiver->open();
    }
}

// ConcreteCommand para pegar en un documento
class PasteCommand implements Command {
    private $receiver;

    public function __construct(Document $receiver) {
        $this->receiver = $receiver;
    }

    public function execute() {
        $this->receiver->paste();
    }
}

```

### Client (Cliente):

```php
// Cliente que configura y utiliza los comandos
class Application {
    private $openCommand;
    private $pasteCommand;

    public function __construct() {
        $document = new Document();
        
        // Crear ConcreteCommands y establecer su receptor
        $this->openCommand = new OpenCommand($document);
        $this->pasteCommand = new PasteCommand($document);
    }

    public function run() {
        // Invocar comandos a través del Invocador (puede ser un botón, menú, etc.)
        $this->openCommand->execute();
        $this->pasteCommand->execute();
    }
}

```

### Invoker (Invocador):

```php
// Invocador (puede ser un menú, botón, etc.)
class MenuItem {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function click() {
        // Solicitar al comando que realice la solicitud
        $this->command->execute();
    }
}

```

### Receiver (Receptor):

```php
// Receptor que sabe cómo realizar las operaciones asociadas con una solicitud
class Document {
    public function open() {
        echo "Documento abierto.\n";
    }

    public function paste() {
        echo "Texto pegado en el documento.\n";
    }
}

```

### Uso del código:

```php
// Uso del código
$application = new Application();

// Configurar el invocador (puede ser un botón en una GUI, por ejemplo)
$menuButton = new MenuItem();
$menuButton->setCommand($application->openCommand);

// El usuario hace clic en el botón del menú
$menuButton->click();
```

Este ejemplo representa un sistema simple donde se tienen comandos para abrir y pegar en un documento. El cliente (Application) configura y utiliza los comandos, y el invocador (MenuItem) solicita la ejecución de los comandos. El receptor (Document) sabe cómo realizar las operaciones asociadas con las solicitudes. Al hacer clic en el botón del menú, se ejecuta el comando de abrir el documento. Puedes extender este ejemplo agregando más comandos y funcionalidades según sea necesario.