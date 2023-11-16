El patrón de diseño Command es un patrón de diseño de comportamiento que encapsula una solicitud como un objeto, permitiendo a los clientes parametrizar objetos con diferentes solicitudes, encolar o registrar solicitudes y admitir operaciones reversibles (undo). Aquí están los componentes clave del patrón:

### Participantes:

1. **Command (Comando):**
   - Declara una interfaz para ejecutar una operación.
   - Típicamente incluye una operación abstracta `Execute` que se debe implementar.

2. **ConcreteCommand (ComandoConcreto) (por ejemplo, PasteCommand, OpenCommand):**
   - Define una vinculación entre un objeto Receptor y una acción.
   - Implementa `Execute` invocando la operación correspondiente en el Receptor.

3. **Client (Cliente) (por ejemplo, Aplicación):**
   - Crea un objeto ConcreteCommand y establece su Receptor.

4. **Invoker (Invocador) (por ejemplo, MenuItem):**
   - Solicita al comando que realice la solicitud llamando a `Execute` en él.

5. **Receiver (Receptor) (por ejemplo, Documento, Aplicación):**
   - Sabe cómo realizar las operaciones asociadas con llevar a cabo una solicitud.

### Colaboraciones:

- El cliente crea un objeto ConcreteCommand y especifica su Receptor.
- Un objeto Invocador almacena el objeto ConcreteCommand.
- El invocador emite una solicitud llamando a `Execute` en el comando.
- Cuando los comandos son reversibles, ConcreteCommand almacena el estado para deshacer el comando antes de llamar a `Execute`.
- El objeto ConcreteCommand invoca operaciones en su Receptor para llevar a cabo la solicitud.

### Consecuencias:

1. **Desacoplamiento:**
   - Desacopla el objeto que emite la operación del que sabe cómo llevarla a cabo.
   - Proporciona flexibilidad en el diseño de interfaces de usuario.

2. **Objetos de Primera Clase:**
   - Los comandos son tratados como objetos de primera clase, permitiendo su manipulación y extensión.

3. **Comandos Compuestos:**
   - Los comandos se pueden ensamblar en comandos compuestos, permitiendo la ejecución de un número indefinido de comandos.

4. **Facilidad de Extensión:**
   - Agregar nuevos comandos es fácil sin cambiar clases existentes.

### Aplicabilidad:

Usa el patrón Command cuando desees:
- Parametrizar objetos por una acción a realizar.
- Especificar, encolar y ejecutar solicitudes en momentos diferentes.
- Soportar operaciones reversibles (undo).
- Soportar el registro de cambios para posibles recuperaciones del sistema.
- Estructurar un sistema alrededor de operaciones de alto nivel construidas sobre operaciones primitivas.

### Patrones Relacionados:

- **Composite (Compuesto) (183):** Usado para implementar comandos compuestos.
- **Memento (Memoria) (316):** Mantiene el estado necesario para deshacer el efecto de un comando.
- **Prototype (Prototipo) (133):** Los comandos que deben copiarse antes de colocarse en la lista de historial actúan como prototipos.

### Usos Conocidos:

El patrón Command se ha utilizado en varios marcos y bibliotecas, incluyendo MacApp, ET++, InterViews, Unidraw y la biblioteca de clases THINK.

### Código de Ejemplo:

El código C++ proporcionado ilustra la implementación del patrón Command con las clases OpenCommand, PasteCommand, SimpleCommand y MacroCommand.

### Consideraciones de Implementación:

- Considera el nivel de inteligencia de los comandos: desde definir una vinculación hasta implementar todo.
- Soporta capacidades de deshacer y rehacer proporcionando una operación Unexecute.
- Evita la acumulación de errores en el proceso de deshacer considerando la histeresis.
- Las plantillas C++ se pueden utilizar para comandos simples que no son reversibles y no requieren argumentos.

Este patrón de diseño proporciona una manera flexible de diseñar sistemas donde el emisor de una solicitud no necesita saber cómo se llevará a cabo la solicitud. Admite la encapsulación, la flexibilidad y la separación de responsabilidades.