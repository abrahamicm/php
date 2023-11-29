import os
import asyncio
from dotenv import load_dotenv
from telegram import Bot

# Carga las variables de entorno desde el archivo .env
load_dotenv()

# Obtén el BOT_TOKEN desde las variables de entorno
BOT_TOKEN = os.getenv('BOT_TOKEN')

# Verifica si se obtuvo correctamente el valor
if BOT_TOKEN is None:
    print("Asegúrate de configurar la variable de entorno 'BOT_TOKEN'.")
else:
    # Inicializa el bot de Telegram
    bot = Bot(token=BOT_TOKEN)

    async def get_bot_info():
        try:
            # Obtiene la información del bot de forma asíncrona
            bot_info = await bot.get_me()

            # Imprime el nombre de usuario del bot
            print(f"Nombre de usuario del bot: {bot_info.username}")
        except Exception as e:
            print(f"Error al obtener información del bot: {e}")

    # Ejecuta la función asíncrona
    asyncio.run(get_bot_info())
