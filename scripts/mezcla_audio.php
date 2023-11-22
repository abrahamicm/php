<?php

/**
 * Función para mezclar archivos de audio en la carpeta '/audios/' con un archivo de fondo
 * y guardar los resultados en la carpeta '/mezcla/'.
 * Si la carpeta '/mezcla/' no existe, la función la creará.
 */
function mezcla_audio()
{
    // Ruta de la carpeta de audios
    $carpeta_audios = __DIR__ . '/audios/';

    // Ruta de la carpeta de salida para las mezclas
    $carpeta_mezcla = __DIR__ . '/mezcla/';

    // Archivo de fondo
    $fondo = __DIR__ . '/fondo.mp3';

    // Obtener la lista de archivos en la carpeta de audios
    $archivos_audios = scandir($carpeta_audios);

    // Eliminar . y .. de la lista de archivos
    $archivos_audios = array_diff($archivos_audios, array('..', '.'));

    // Crear la carpeta 'mezcla' si no existe
    if (!file_exists($carpeta_mezcla)) {
        mkdir($carpeta_mezcla, 0775, true);
    }

    // Recorrer cada archivo de audio en la carpeta
    foreach ($archivos_audios as $archivo_audio) {
        // Comprobar si es un archivo de audio en formato 'ogg'
        if (pathinfo($archivo_audio, PATHINFO_EXTENSION) === 'ogg') {
            // Ruta del archivo de audio actual
            $ruta_audio = $carpeta_audios . $archivo_audio;

            // Nombre del archivo de salida con sufijo '_musica'
            $nombre_salida = $carpeta_mezcla . pathinfo($archivo_audio, PATHINFO_FILENAME) . '_musica.ogg';

            // Comando ffmpeg para mezclar el audio de fondo con el archivo actual y convertir a Ogg
            $comando = "ffmpeg -i $fondo -i $ruta_audio -filter_complex amix=inputs=2:duration=shortest -c:a  libvorbis $nombre_salida";

            // Ejecutar el comando
            shell_exec($comando);

            // Imprimir mensaje indicando la creación del archivo
            echo "Se ha creado el archivo $nombre_salida\n";
        }
    }
}

// Llamar a la función para realizar la mezcla de audio
mezcla_audio();

