### Tabla de Opciones Generales

| Opción                  | Descripción                                               |
| ------------------------| --------------------------------------------------------- |
| -h                      | Imprimir opciones básicas.                                 |
| -h long                 | Imprimir más opciones.                                    |
| -h full                 | Imprimir todas las opciones (formato y códec incluidos).  |
| -h type=name            | Imprimir todas las opciones para el tipo especificado.     |
| -L                      | Mostrar la licencia.                                      |
| -version                | Mostrar la versión.                                       |
| -buildconf              | Mostrar la configuración de compilación.                   |
| -formats                | Mostrar formatos disponibles.                             |
| -muxers                 | Mostrar multiplexores disponibles.                         |
| -demuxers               | Mostrar demultiplexores disponibles.                       |
| -devices                | Mostrar dispositivos disponibles.                          |
| -codecs                 | Mostrar códecs disponibles.                               |
| -decoders               | Mostrar decodificadores disponibles.                       |
| -encoders               | Mostrar codificadores disponibles.                         |
| -bsfs                   | Mostrar filtros de flujo disponibles.                      |
| -protocols              | Mostrar protocolos disponibles.                            |
| -filters                | Mostrar filtros disponibles.                               |
| -pix_fmts               | Mostrar formatos de píxeles disponibles.                  |
| -layouts                | Mostrar disposiciones estándar de canales.                 |
| -sample_fmts            | Mostrar formatos de muestra de audio disponibles.          |
| -dispositions           | Mostrar disposiciones de flujo disponibles.                |
| -colors                 | Mostrar nombres de colores disponibles.                    |
| -sources device         | Listar fuentes del dispositivo de entrada.                 |
| -sinks device           | Listar destinos del dispositivo de salida.                 |
| -hwaccels               | Mostrar métodos de aceleración de hardware disponibles.    |

### Tabla de Opciones Globales

| Opción                   | Descripción                                           |
| ------------------------- | ----------------------------------------------------- |
| -loglevel loglevel        | Establecer el nivel de registro.                       |
| -v loglevel               | Establecer el nivel de registro.                       |
| -report                   | Generar un informe.                                   |
| -max_alloc bytes          | Establecer el tamaño máximo de un bloque asignado.    |
| -y                        | Sobrescribir archivos de salida.                      |
| -n                        | No sobrescribir archivos de salida.                   |
| -ignore_unknown           | Ignorar tipos de flujo desconocidos.                  |
| -filter_threads           | Número de hilos de filtro no complejos.               |
| -filter_complex_threads   | Número de hilos para -filter_complex.                 |
| -stats                    | Imprimir informe de progreso durante la codificación.|
| -max_error_rate           | Tasa máxima de error; encima de esta, se devuelve un error. |

### Tabla de Opciones por Archivo

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -f fmt                   | Forzar el formato de salida.                               |
| -c codec                 | Nombre del códec.                                         |
| -codec codec             | Nombre del códec.                                         |
| -pre preset              | Nombre del preset.                                        |
| -map_metadata           | Establecer información de metadatos de salida desde la entrada. |
| -t duration              | Grabar o transcodificar "duration" segundos de audio/video. |
| -to time_stop            | Tiempo de parada para grabar o transcodificar.             |
| -fs limit_size           | Establecer el tamaño límite del archivo en bytes.          |
| -ss time_off             | Establecer el desplazamiento de tiempo de inicio.          |
| -sseof time_off          | Establecer el desplazamiento de tiempo relativo al final.  |
| -seek_timestamp          | Habilitar/deshabilitar la búsqueda por marca de tiempo con -ss. |
| -timestamp time          | Establecer la marca de tiempo de grabación ('now' para establecer la hora actual). |
| -metadata string=string  | Agregar metadatos.                                        |
| -program title=string:st=number... | Agregar programa con flujos especificados.          |
| -target type             | Especificar el tipo de archivo de destino.                |
| -apad                    | Rellenar audio.                                           |
| -frames number           | Establecer el número de fotogramas a generar.             |
| -filter filter_graph     | Establecer el filtro de la gráfica de flujo.              |
| -filter_script filename  | Leer la descripción de la gráfica de filtro desde un archivo. |
| -reinit_filter           | Reiniciar la gráfica de filtro en cambios de parámetros de entrada. |
| -discard                 | Descartar.                                                |
| -disposition             | Disposición.                                             |

### Tabla de Opciones de Video

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -vframes number          | Establecer el número de fotogramas de video a generar.     |
| -r rate                  | Establecer la velocidad de fotogramas (valor en Hz, fracción o abreviatura). |
| -fpsmax rate             | Establecer la velocidad máxima de fotogramas (valor en Hz, fracción o abreviatura). |
| -s size                  | Establecer el tamaño del fotograma (WxH o abreviatura).    |
| -aspect aspect           | Establecer la relación de aspecto (4:3, 16:9 o valores decimales). |
| -display_rotation angle  | Establecer la rotación pura en sentido contrario a las agujas del reloj en grados para el/los flujo(s). |
| -display_hflip           | Establecer la inversión horizontal para el/los flujo(s) de video (anula cualquier rotación si no está establecida). |
| -display_vflip           | Establecer la inversión vertical para el/los flujo(s) de video (anula cualquier rotación si no está establecida). |
| -vn                      | Desactivar video.                                         |
| -vcodec codec            | Forzar el códec de video ('copy' para copiar el flujo).   |
| -timecode hh:mm:ss[:;.]ff | Establecer el valor inicial de TimeCode.                 |
| -pass n                  | Seleccionar el número de pases (1 a 3).                  |
| -vf filter_graph         | Establecer filtros de video.                             |
| -b bitrate               | Tasa de bits de video (utilice -b:v).                    |
| -dn                      | Desactivar datos.                                        |

### Tabla de Opciones de Audio

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -aframes number          | Establecer el número de fotogramas de audio a generar.     |
| -aq quality              | Establecer la calidad de audio (específica del códec).    |
| -ar rate                 | Establecer la frecuencia de muestreo de audio (en Hz).    |
| -ac channels             | Establecer el número de canales de audio.                 |
| -an                      | Desactivar audio.                                         |
| -acodec codec            | Forzar el códec de audio ('copy' para copiar el flujo).   |
| -ab bitrate              | Tasa de bits de audio (utilice -b:a).                    |
| -af filter_graph         | Establecer filtros de audio.                             |

### Tabla de Opciones de Subtítulos

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -s size                  | Establecer el tamaño del fotograma (WxH o abreviatura).    |
| -sn                      | Desactivar subtítulos.                                    |
| -scodec codec            | Forzar el códec de subtítulos ('copy' para copiar el flujo). |
| -stag fourcc/tag         | Forzar la etiqueta/fourcc de subtítulos.                  |
| -fix_sub_duration        | Corregir la duración de los subtítulos.                  |
| -canvas_size size        | Establecer el tamaño del lienzo (WxH o abreviatura).      |
| -spre preset             | Establecer las opciones de subtítulos al preset indicado. |

### Tabla de Opciones Específicas de Video

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -passlogfile prefix      | Establecer el nombre del archivo de registro de pases.    |
| -pass n                  | Seleccionar el número de pases (1 a 3).                  |
| -vf filter_graph         | Establecer filtros de video específicos.                  |

### Tabla de Opciones Específicas de Audio

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -atag fourcc/tag         | Forzar la etiqueta/fourcc de audio.                       |

### Tabla de Opciones Adicionales

| Opción                   | Descripción                                               |
| ------------------------ | --------------------------------------------------------- |
| -program title=string:st=number... | Agregar programa con flujos especificados.          |
| -target type             | Especificar el tipo de archivo de destino.                |
| -apad                    | Rellenar audio.                                           |
| -frames number           | Establecer el número de fotogramas a generar.             |
| -filter filter_graph     | Establecer el filtro de la gráfica de flujo.              |
| -filter_script filename  | Leer la descripción de la gráfica de filtro desde un archivo. |
| -reinit_filter           | Reiniciar la gráfica de filtro en cambios de parámetros de entrada. |
| -discard                 | Descartar.                                                |
| -disposition             | Disposición.                                             |
