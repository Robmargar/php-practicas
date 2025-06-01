<?php

/* Directorios o Carpetas

Si queremos trabajar con directorios tenemos que aprender que podemos crearlos, eliminarlos o modificar su contenido:
  
    * Para crearlos utilizamos mkdir('nombre_directorio', permisos);
    ------Permisos-----
    // Lectura y escritura para el propietario, nada para los demás     = 0600
    // Lectura y escritura para el propietario, lectura para los demás  = 0644
    // Todo para el propietario, lectura y ejecución para los otros     = 0755
    // Todo para el propietario, lectura y ejecución para el            = 0750
       grupo del propietario.
    // Todos los permisos posibles                                      = 0777 

    * Para eliminarlos utilizamos rmdir('nombre_directorio');
    * Para cambiar de directorio se utiliza chdir('./Ruta del directorio);

*/

//CREANDO DIRECTORIO y comprobando si existe directorio manda error si no lo crea.

if (is_dir('Carpeta_Prueba')) {
    echo "<h3> La carpeta no se puede crear pues ya existe  y su contenido es el siguiente: </h3>";
    // Recorremos el Directorio y mostramos su contenido.   
    if ($directorio = opendir('./Carpeta de Prueba')) {
        echo "<hr>";
        while (false !== ($lista_archivos = readdir($directorio))) {
            // Como tambien muestra la ruta de los archivos lo que hacemos es eliminar esos "." que muestran la ruta
            if ($lista_archivos !== '.' && $lista_archivos !== '..') echo "<h4> $lista_archivos </h4>";
        };
    };
} else {
    mkdir('Carpeta_Prueba', 0777) or die('No se puede crear la carpeta');
    echo "<h2> La carpeta se creo exitosamente </h2>";
    //Entramos al directorio que acabamos de crear  para crearle archivos 
    $nuevo_dir = './Carpeta_Prueba';
    if (chdir($nuevo_dir)) {
        // Crearemos un archivo para luego listarlos y aprender a recorrer las carpetas 
        $fh = fopen("prueba.txt", 'w') or die("Se produjo un error al crear el archivo");
        $texto = <<<_END
        Comienza con Linea 1
        Linea 2
        Termina con Linea 3
        _END;

        fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
        fclose($fh);
    };
};
