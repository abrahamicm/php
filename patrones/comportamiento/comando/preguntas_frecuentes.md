# ¿Por qué se denomina "cliente" a la aplicación en el contexto del patrón de diseño Command?

En el contexto del patrón de diseño Command, el término "cliente" se refiere al objeto que crea y configura los objetos de comando. En este patrón, el cliente es responsable de decidir qué comandos se ejecutarán y cómo se conectarán con los receptores.

En el ejemplo que proporcioné, la clase `Application` actúa como el cliente. Esta clase crea instancias de comandos concretos (como `OpenCommand` y `PasteCommand`) y establece los receptores asociados (por ejemplo, instancias de `Document`). Luego, el cliente puede ejecutar esos comandos a través del método `run()`.

La elección de llamar al objeto que utiliza el patrón "cliente" es una convención de diseño y puede variar en diferentes contextos. En el patrón Command, el cliente representa la entidad que decide qué comandos se deben ejecutar y cómo deben interactuar entre sí y con los receptores.



