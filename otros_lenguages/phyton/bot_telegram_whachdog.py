import os
import asyncio
from dotenv import load_dotenv
from telegram import Bot
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

# Carga las variables de entorno desde el archivo .env
load_dotenv()

# Obtén el BOT_TOKEN y CHAT_ID desde las variables de entorno
BOT_TOKEN = os.getenv('BOT_TOKEN')
CHAT_ID = os.getenv('CHAT_ID')

# Verifica si se obtuvieron correctamente los valores
if BOT_TOKEN is None or CHAT_ID is None:
    print("Asegúrate de configurar las variables de entorno 'BOT_TOKEN' y 'CHAT_ID'.")
else:
    # Inicializa el bot de Telegram
    bot = Bot(token=BOT_TOKEN)

    # Función para manejar la creación de archivos
    async def handle_file_creation(event):
        try:
            new_file_path = event.src_path
            message = f"Nuevo archivo agregado: {new_file_path}"
            # Envia el mensaje de forma asíncrona
            await bot.send_message(chat_id=CHAT_ID, text=message)
            print("Mensaje enviado correctamente.")
        except Exception as e:
            print(f"Error al enviar mensaje: {e}")

    class FileHandler(FileSystemEventHandler):
        async def on_created(self, event):
            if event.is_directory:
                return  # Ignora los eventos relacionados con la creación de directorios
            else:
                # Maneja la creación del archivo de forma asíncrona
                await handle_file_creation(event)

    # Saludo al iniciar el script
    async def send_greeting():
        try:
            # Envia el saludo al inicio de forma asíncrona
            await bot.send_message(chat_id=CHAT_ID, text="¡Hola! Este es un saludo desde tu script de monitoreo de archivos.")
            print("Saludo enviado correctamente.")
        except Exception as e:
            print(f"Error al enviar saludo: {e}")

    # Ruta del directorio del script
    script_directory = os.path.dirname(os.path.abspath(__file__))

    # Ruta de la carpeta que deseas vigilar (el directorio del script)
    folder_to_watch = script_directory

    # Crear el manejador de eventos
    event_handler = FileHandler()

    # Crear el Observer sin especificar el ObserverClass para que use el apropiado para Windows
    observer = Observer()
    observer.schedule(event_handler, folder_to_watch, recursive=True)

    # Ejecutar el Observer en un bucle de eventos
    observer.start()

    try:
        # Saludar al inicio del script
        asyncio.run(send_greeting())

        print("Iniciando vigilancia. Presiona Enter para detener.")
        # Esperar a que el usuario presione Enter para salir
        input()
    except KeyboardInterrupt:
        # Detener el Observer cuando se presiona Ctrl+C
        observer.stop()
        observer.join()
    except Exception as e:
        print(f"Error inesperado: {e}")
    finally:
        print("Saliendo del script.")
