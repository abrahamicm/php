Entendido, aquí está el glosario organizado según el orden que proporcionaste:

| Término                     | Descripción                                                                                                       |
|-----------------------------|-------------------------------------------------------------------------------------------------------------------|
| Singleton                   | Define una instancia única.                                                                                       |
| Creator                     | Declara el Factory Method para crear objetos en un patrón Factory Method.                                         |
| ConcreteCreator             | Implementa el Factory Method para crear objetos concretos en un patrón Factory Method.                             |
| Product                     | Define la interfaz de objetos creados por el Factory Method en un patrón Factory Method.                          |
| ConcreteProduct             | Implementa la interfaz de Product en un patrón Factory Method o Abstract Factory.                                 |
| AbstractFactory             | Interfaz que declara los métodos para crear familias de objetos relacionados.                                      |
| ConcreteFactory             | Implementa las interfaces de AbstractFactory para crear objetos concretos en un patrón Abstract Factory.          |
| AbstractProduct             | Define la interfaz de un tipo de objeto en un patrón Abstract Factory.                                             |
| ConcreteProduct             | Define la interfaz de objetos creados por un ConcreteFactory en un patrón Abstract Factory.                       |
| Director                    | Construye un objeto utilizando la interfaz de Builder en un patrón Builder.                                       |
| Builder                     | Interfaz que declara los pasos para construir un producto complejo.                                                |
| ConcreteBuilder             | Implementa la interfaz de Builder para construir partes específicas de un producto.                                |
| Product                     | Define la interfaz de objetos creados por el Builder en un patrón Builder.                                        |
| Prototype                   | Declara una interfaz para clonarse a sí mismo.                                                                   |
| ConcretePrototype           | Implementa la operación de clonación en un patrón Prototype.                                                      |
| Target                      | Define la interfaz específica del dominio que utiliza el Cliente en un patrón Adapter.                              |
| Client                      | Cliente que interactúa con objetos en el sistema.                                                                  |
| Adaptee                     | Define una interfaz existente que necesita ser adaptada.                                                            |
| Adapter                     | Adapta la interfaz de Adaptee para que sea compatible con Target.                                                  |
| Abstraction                 | Abstracción que contiene una referencia a Implementor y puede delegar algunas operaciones a él.                  |
| Implementor                 | Declara una interfaz para el comportamiento implementado por las clases ConcreteImplementor en un patrón Bridge. |
| RefinedAbstraction          | Extiende la interfaz de Abstraction en un patrón Bridge.                                                          |
| ConcreteImplementor         | Implementa la interfaz de Implementor en un patrón Bridge.                                                         |
| Component                   | Declara la interfaz para objetos en una estructura Composite.                                                      |
| Leaf                        | Representa un objeto indivisible en una estructura Composite.                                                     |
| Composite                   | Estructura que contiene componentes hijos, que pueden ser hojas o subcompuestos.                                   |
| Component                   | Declara la interfaz para objetos en una estructura Composite.                                                      |
| ConcreteComponent           | Implementa la interfaz de Component en un patrón Composite.                                                        |
| Decorator                   | Envuelve objetos Component para agregar responsabilidades adicionales.                                            |
| ConcreteDecorator           | Implementa la interfaz de Decorator para agregar responsabilidades adicionales en un patrón Decorator.             |
| Facade                      | Proporciona una interfaz unificada para un conjunto de interfaces en Subsystem.                                   |
| Subsystem classes           | Conjunto de clases que conforman un subsistema en un patrón Facade.                                                |
| Flyweight                   | Define una interfaz para compartir entre muchos objetos pequeñas porciones de estado en un patrón Flyweight.    |
| ConcreteFlyweight           | Implementa la interfaz de Flyweight y almacena el estado compartido en un patrón Flyweight.                       |
| UnsharedConcreteFlyweight    | Implementa la interfaz de Flyweight pero no comparte su estado en un patrón Flyweight.                             |
| FlyweightFactory            | Gestiona objetos Flyweight y asegura que se comparten adecuadamente.                                              |
| Subject                     | Define una interfaz para agregar, eliminar y notificar observadores en un patrón Observer.                         |
| RealSubject                 | Define el objeto real que el Proxy representa y controla el acceso a él en un patrón Proxy.                       |
| Proxy                       | Controla el acceso a RealSubject y puede realizar tareas adicionales antes o después de la solicitud en un patrón Proxy. |
| Handler                     | Declara una interfaz para manejar solicitudes en un patrón Chain of Responsibility.                               |
| ConcreteHandler             | Manejador concreto que decide si procesa la solicitud o la pasa al siguiente en la cadena en un patrón Chain of Responsibility. |
| Client                      | Cliente que emite solicitudes en un patrón Command.                                                               |
| Command                     | Declara una interfaz para ejecutar una operación.                                                                 |
| ConcreteCommand             | Implementa Execute invocando las operaciones correspondientes en Receiver en un patrón Command.                   |
| Client                      | Cliente que utiliza un Invoker para solicitar que el comando ejecute una operación en un patrón Command.         |
| Invoker                     | Solicita que el comando ejecute una operación en un patrón Command.                                               |
| Receiver                    | Sabe cómo realizar las operaciones asociadas con llevar a cabo una solicitud en un patrón Command.               |
| AbstractExpression          | Define la interpretación de las operaciones en un patrón Interpreter.                                               |
| TerminalExpression           | Representa una expresión primitiva en un patrón Interpreter.                                                      |
| NonterminalExpression        | Representa una expresión que puede ser interpretada en un patrón Interpreter.                                      |
| Context                     | Mantiene el estado global para el intérprete en un patrón Interpreter.                                             |
| Client                      | Utiliza el Interpreter para evaluar expresiones.                                                                  |
| Iterator                    | Proporciona un método para acceder a los elementos de Aggregate sin exponer su representación interna.          |
| ConcreteIterator            | Implementa la interfaz de Iterator en un patrón Iterator.                                                          |
| Aggregate                   | Interfaz que declara un método para crear un iterador.                                                             |
| ConcreteAggregate           | Implementación concreta de Aggregate en un patrón Iterator.                                                        |
| Mediator                    | Define una interfaz para la comunicación entre objetos Colleague, evitando que se comuniquen directamente.       |
| ConcreteMediator            | Implementa la interfaz de Mediator y coordina las interacciones entre los objetos Colleague en un patrón Mediator. |
| Colleague                   | Objeto que colabora con otros objetos a través de un mediador en un patrón Mediator.                              |
| Originator                  | Crea y restaura instantáneas (Mementos) de su estado interno en un patrón Memento.                                |
| Memento                    | Almacena y restaura el estado interno de un objeto en un patrón Memento.                                          |
| Caretaker                   | Almacena y recupera Mementos en un patrón Memento.                                                                 |
| Subject                     | Define una interfaz para agregar, eliminar y notificar observadores en un patrón Observer.                         |
| ConcreteSubject             | Implementa la interfaz de Subject y mantiene una lista de observadores en un patrón Observer.                    |
| Observer                    | Define una interfaz de actualización que los objetos ConcreteObserver implementan para recibir notificaciones de cambios en el Subject en un patrón Observer. |
| ConcreteObserver            | Implementa la interfaz de Observer y recibe notificaciones de cambios en el Subject en un patrón Observer.       |
| Context                     | Mantiene una referencia a un objeto State y delega el comportamiento relacionado con el estado a ese objeto en un patrón State. |
| State                       | Define una interfaz para encapsular el comportamiento asociado con un estado particular de un Context en un patrón State. |
| ConcreteState               | Implementa el comportamiento asociado con un estado en un patrón State.                                            |
| Participants                | Lista de participantes en un patrón de diseño.                                                                    |
| Context                     | Mantiene una referencia a un objeto State y delega el comportamiento relacionado con el estado a ese objeto en un patrón State. |
| Strategy                    | Define una interfaz común para todas las estrategias concretas en un patrón Strategy.                              |
| ConcreteStrategy            | Implementa una estrategia específica en un patrón Strategy.                                                        |
| AbstractClass               | Clase abstracta que define un esqueleto de algoritmo, dejando algunos pasos para que las subclases los implementen. |
| ConcreteClass               | Clase concreta que implementa los pasos específicos en un patrón Template Method.                                  |
| Visitor                     | Define una operación que visita los elementos de una estructura de objetos en un patrón Visitor.                  |
| ConcreteVisitor             | Implementa la interfaz de Visitor y realiza operaciones específicas en elementos concretos en un patrón Visitor. |
| Element                     | Define una operación que puede ser visitada por un objeto Visitor en un patrón Visitor.                           |
| ConcreteElement             | Implementa la interfaz de Element en un patrón Visitor.                                                            |
| ObjectStructure             | Mantiene una colección de elementos a visitar en un patrón Visitor.                                               |
