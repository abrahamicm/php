Claro, aquí tienes la descripción del comando `infyom:scaffold` en formato tabla:

| Descripción | Crea vistas completas CRUD para el modelo proporcionado. |
| --- | --- |
| **Uso** | `infyom:scaffold [opciones] [--] <modelo>` |
| **Argumentos** | `<modelo>`: Nombre singular del modelo |
| **Opciones** | 
| `--fieldsFile=FIELDSFILE` | Entrada de campos como archivo JSON |
| `--jsonFromGUI=JSONFROMGUI` | Cadena JSON directa al usar la interfaz GUI |
| `--plural=PLURAL` | Nombre plural del modelo |
| `--tableName=TABLENAME` | Nombre de la tabla |
| `--fromTable` | Generar a partir de una tabla existente |
| `--ignoreFields=IGNOREFIELDS` | Ignorar campos al generar desde la tabla |
| `--save` | Guardar el esquema del modelo en un archivo |
| `--primary=PRIMARY` | Clave primaria personalizada |
| `--prefix=PREFIX` | Prefijo para todos los archivos |
| `--paginate=PAGINATE` | Paginación para index.blade.php |
| `--skip=SKIP` | Opciones específicas para omitir (migration, model, controllers, api_controller, scaffold_controller, repository, requests, api_requests, scaffold_requests, routes, api_routes, scaffold_routes, views, tests, menu, dump-autoload) |
| `--datatables=DATATABLES` | Anular la configuración de datatables |
| `--views=VIEWS` | Especificar solo las vistas que deseas generar: index, create, edit, show |
| `--relations` | Especificar si deseas pasar relaciones para los campos |
| `--softDelete` | Opción de eliminación suave |
| `--forceMigrate` | Especificar si deseas ejecutar la migración o no |
| `--factory` | Generar factory |
| `--seeder` | Generar seeder |
| `--localized` | Localizar archivos |
| `--repositoryPattern=REPOSITORYPATTERN` | Patrón de repositorio |
| `--resources=RESOURCES` | Recursos |
| `--connection=CONNECTION` | Especificar el nombre de la conexión |
| `--jqueryDT` | Generar pantalla de listado en JQuery Datatables |
| `-h`, `--help` | Mostrar ayuda para el comando dado |
| `-q`, `--quiet` | No mostrar ningún mensaje |
| `-V`, `--version` | Mostrar la versión de esta aplicación |
| `--ansi`, `--no-ansi` | Forzar salida ANSI (o desactivar --no-ansi) |
| `-n`, `--no-interaction` | No hacer preguntas interactivas |
| `--env[=ENV]` | El entorno bajo el cual debería ejecutarse el comando |
| `-v`, `-vv`, `-vvv`, `--verbose` | Aumentar la verbosidad de los mensajes: 1 para salida normal, 2 para mensajes más detallados y 3 para depuración |