# corregir error de saltos de linea incopatible en windows
- instalar esto https://sourceforge.net/projects/dos2unix/
- ejecutar este comando
~~~shell
find . -type f -exec unix2dos {} \;
~~~