
| **Término**                    | **Descripción**                                                                                                                                                                                        |
|-------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **Clase abstracta**           | Una clase cuyo propósito principal es definir una interfaz. Una clase abstracta pospone parte o toda su implementación a las subclases. Una clase abstracta no puede ser instanciada.                   |
| **Acoplamiento abstracto**     | Dada una clase A que mantiene una referencia a una clase abstracta B, se dice que la clase A está acoplada abstractamente a B. Llamamos a esto acoplamiento abstracto porque A se refiere a un tipo de objeto, no a un objeto concreto. |
| **Operación abstracta**        | Una operación que declara una firma pero no la implementa. En C++, una operación abstracta corresponde a una función miembro virtual pura.                                                           |
| **Relación de conocimiento**   | Una clase que se refiere a otra clase tiene un conocimiento con esa clase.                                                                                                                             |
| **Objeto de agregado**         | Un objeto que está compuesto por subobjetos. Los subobjetos se llaman las partes del agregado, y el agregado es responsable de ellos.                                                                |
| **Relación de agregación**     | La relación de un objeto de agregado con sus partes. Una clase define esta relación para sus instancias (por ejemplo, objetos de agregado).                                                        |
| **Reutilización de caja negra**| Un estilo de reutilización basado en la composición de objetos. Los objetos compuestos no revelan detalles internos entre sí y, por lo tanto, son análogos a "cajas negras".                               |
| **Clase**                     | Una clase define la interfaz y la implementación de un objeto. Especifica la representación interna del objeto y define las operaciones que el objeto puede realizar.                               |
| **Diagrama de clase**          | Un diagrama que representa clases, su estructura interna y operaciones, y las relaciones estáticas entre ellas.                                                                                     |
| **Operación de clase**         | Una operación dirigida a una clase y no a un objeto individual. En C++, las operaciones de clase se llaman funciones miembro estáticas.                                                           |
| **Clase concreta**            | Una clase que no tiene operaciones abstractas. Puede ser instanciada.                                                                                                                                   |
| **Constructor**                | En C++, una operación que se invoca automáticamente para inicializar nuevas instancias.                                                                                                             |
| **Acoplamiento**               | El grado en que los componentes de software dependen entre sí.                                                                                                                                         |
| **Delegación**                | Un mecanismo de implementación en el que un objeto reenvía o delega una solicitud a otro objeto. El delegado lleva a cabo la solicitud en nombre del objeto original.                                  |
| **Patrón de diseño**          | Un patrón de diseño nombra, motiva y explica sistemáticamente un diseño general que aborda un problema de diseño recurrente en sistemas orientados a objetos. Describ...    |
| **Destructor**                 | En C++, una operación que se invoca automáticamente para finalizar un objeto que está a punto de ser eliminado.                                                                                        |
| **Vinculación dinámica**      | La asociación en tiempo de ejecución de una solicitud a un objeto y una de sus operaciones. En C++, solo las funciones virtuales se vinculan dinámicamente.                                            |
| **Encapsulamiento**           | El resultado de ocultar una representación e implementación en un objeto. La representación no es visible y no se puede acceder directamente desde fuera del objeto. Las operaciones son la única manera de acceder y modificar la representación de un objeto. |
| **Framework**                  | Un conjunto de clases que colaboran y forman un diseño reutilizable para una clase específica de software. Un framework proporciona orientación arquitectónica al dividir el diseño en clases abstractas y definir sus responsabilidades y colaboraciones. Un de... |
| **Clase amiga**               | En C++, una clase que tiene los mismos derechos de acceso a las operaciones y datos de una clase que la propia clase.                                                                              |
| **Herencia**                  | Una relación que define una entidad en términos de otra. La herencia de clases define una nueva clase en términos de una o más clases parentales. La nueva clase hereda su interfaz e implementación de sus padres. La nueva clase se llama subclase o (en C++) una clase de... |
| **Variable de instancia**     | Un fragmento de datos que define parte de la representación de un objeto. En C++, se utiliza el término miembro de datos.                                                                         |
| **Diagrama de interacción**   | Un diagrama que muestra el flujo de solicitudes entre objetos.                                                                                                                                         |
| **Interfaz**                  | El conjunto de todas las firmas definidas por las operaciones de un objeto. La interfaz describe el conjunto de solicitudes a las que un objeto puede responder.                                                                   |
| **Metaclase**                 | En Smalltalk, las clases son objetos. Una metaclase es la clase de un objeto de clase.                                                                                                                |
| **Clase mixin**               | Una clase diseñada para combinarse con otras clases a través de la herencia. Las clases mixin suelen ser abstractas.                                                                                  |
| **Objeto**                    | Una entidad en tiempo de ejecución que empaqueta tanto datos como procedimientos que operan en esos datos.                                                                                        |
| **Composición de objetos**    | Ensamblar o componer objetos para obtener un comportamiento más complejo.                                                                                                                              |
| **Diagrama de objetos**        | Un diagrama que representa una estructura de objetos particular en tiempo de ejecución.                                                                                                               |
| **Referencia a objeto**        | Un valor que identifica a otro objeto.                                                                                                                                                               |
| **Operación**                 | Los datos de un objeto solo pueden ser manipulados por sus operaciones. Un objeto realiza una operación cuando recibe una solicitud. En C++, las operaciones se llaman funciones miembro. Smalltalk utiliza el término método.               |
| **Anulación**                 | Redefinir una operación (heredada de una clase padre) en una subclase.                                                                                                                                 |
| **Tipo parametrizado**        | Un tipo que deja algunos tipos constituyentes sin especificar. Los tipos no especificados se suministran como parámetros en el punto de uso. En C++, los tipos parametrizados se llaman plant

illas.                                                           |
| **Clase padre**               | La clase de la cual hereda otra clase. Sinónimos son superclase (Smalltalk), clase base (C++), y clase ancestral.                                                                                 |
| **Polimorfismo**              | La capacidad de sustituir objetos de interfaz coincidente entre sí en tiempo de ejecución.                                                                                                          |
| **Herencia privada**          | En C++, una clase heredada únicamente por su implementación.                                                                                                                                         |
| **Protocolo**                 | Extiende el concepto de una interfaz para incluir las secuencias permitidas de solicitudes.                                                                                                         |
| **Receptor**                  | El objeto objetivo de una solicitud.                                                                                                                                                                |
| **Solicitud**                 | Un objeto realiza una operación cuando recibe una solicitud correspondiente de otro objeto. Un sinónimo común de solicitud es mensaje.                                                         |
| **Firma**                     | La firma de una operación define su nombre, parámetros y valor de retorno.                                                                                                                           |
| **Subclase**                  | Una clase que hereda de otra clase. En C++, una subclase se llama clase derivada.                                                                                                                     |
| **Subsistema**                | Un grupo independiente de clases que colaboran para cumplir un conjunto de responsabilidades.                                                                                                       |
| **Subtipo**                   | Un tipo es un subtipo de otro si su interfaz contiene la interfaz del otro tipo.                                                                                                                      |
| **Supertipo**                 | El tipo padre del cual un tipo hereda.                                                                                                                                                             |
| **Caja de herramientas**      | Una colección de clases que proporciona funcionalidad útil pero no define el diseño de una aplicación.                                                                                                |
| **Tipo**                      | El nombre de una interfaz particular.                                                                                                                                                             |
| **Reutilización de caja blanca**| Un estilo de reutilización basado en la herencia de clases. Una subclase reutiliza la interfaz y la implementación de su clase padre, pero puede tener acceso a aspectos privados de su padre.                                                                        |