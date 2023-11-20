<?php
/**
 * Mueve todos los archivos de la carpeta actual a su carpeta padre.
 * 
 * Obtener la ruta del directorio actual donde se encuentra el script
 * 
 * Obtener la lista de archivos en el directorio actual
 * 
 * Iterar sobre los archivos
 * 
 * Excluir las referencias a directorios padre y directorio actual
 * 
 * Construir las rutas completas
 * 
 * Mover el archivo a la carpeta padre
 * 
 * dirname(__FILE__): Obtiene la ruta del directorio del archivo actual (donde se encuentra el script).
 * 
 * scandir($directorioActual): Obtiene la lista de archivos en el directorio especificado.
 * 
 * basename(__FILE__): Obtiene el nombre base del archivo actual (el propio script).
 * 
 * rename($rutaArchivo, $nuevaRuta): Mueve un archivo a una nueva ubicación especificada.
 * 
 * @return void
 */
function moverArchivosACarpetaPadre() {
    $directorioActual = dirname(__FILE__);

    $archivos = scandir($directorioActual);

    foreach ($archivos as $archivo) {
        $esDirectorioActual = ($archivo == ".");
        $esDirectorioPadre = ($archivo == "..");
        $esElPropioArchivo = ($archivo == basename(__FILE__));

        if (!$esDirectorioActual && !$esDirectorioPadre && !$esElPropioArchivo) {
            $rutaArchivo = $directorioActual . '/' . $archivo;
            $nuevaRuta = dirname($directorioActual) . '/' . $archivo;

            if (rename($rutaArchivo, $nuevaRuta)) {
                echo "Archivo $archivo movido correctamente.<br>";
            } else {
                echo "Error al mover el archivo $archivo.<br>";
            }
        }
    }
}


// Llamar a la función para ejecutar el script
moverArchivosACarpetaPadre();
?>
