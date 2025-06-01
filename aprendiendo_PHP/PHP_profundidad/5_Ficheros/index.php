<?php

/* Archivos o Ficheros
    Vamos a aprender a :
        * Abrir    = fopen('nombre_Archivo.extension', permisos)
        * Leer     = fgets($nombre_Archivo)
        * Escribir = fwrite()
        * Cerrar   = fclose
    Los archivos o ficheros 
    
    Primero abrimos el archivo con la funcion fopen("Nombre_archivo", "modo de apertura");
    Los modos de apertura pueden ser:
     leer=r, 
     escribir=w, 
     ejecucion=x,
     leer y escribir= a+.



    Leemos el archivo con  fgets(""); asignandolo a una variable que guarde el contenido.
    $contenido= fgets("archivo_abierto");


    Cerramos el archivo con fclose(""Nombre_archivo"");
*/

//ABRIMOS ARCHIVO
$archivo = fopen("texto_Prueba.txt", "a+");

//LEEMOS ARCHIVO
// Para archivos de una sola línea se utiliza.
$contenidolin = fgets($archivo);
echo "<h1> Lectura de una sola línea </h1>";
echo $contenidolin . "</br>";

// Si mi archivo tiene más de una línea escrita debemos meter todo en un ciclo para leerlo todo y como 
// condicion del ciclo colocar la función feof("archivo_abierto").
// feor()= (file endo of file)  nos dice mediante un booleanosi ya llegamos al final del arhcivo .
echo "<h1> Lectura completa del archivo con ciclo While</h1>";
while (!feof($archivo)) {
    $contenidoc = fgets($archivo);
    echo $contenidoc . "</br>";
};

// //Si quieres obtener varias líneas o alguna porción de estas, puedes emplear la función fread
echo "<h1> Lectura de las primeras 4 lineas del archivo con fread()</h1>";
$lineas = fopen("texto_Prueba.txt", "a+");
if ($lineas) {
    // lee todo el archivo utilizando el "filesize"
    // $content = fread($lineas, filesize("texto_Prueba.txt"));
    // lee la cantidad de carcteres que coloquemos 
    $content = fread($lineas, 411);
    fclose($lineas);
    echo $content;
} else {
    echo "Error al abrir archivo";
};



// Si quieres obtener el contenido entero de un archivo de una sola atacada, puedes emplear la función file_get_contents().
echo "<h1> Lectura completa del archivo con file_get_contents()</h1>";
echo file_get_contents("texto_Prueba.txt");



//ESCRIBIMOS EN EL ARCHIVO
// verificamos antes de escribir que nuestro modo de apertura nos permita poder escribir.

// fwrite($archivo, "<h3>Intoduciendo texto con PHP desde el mismo index.php</h3>");
fwrite($archivo, "<strong>Int</strong>");

//CERRAMOS ARCHIVO
fclose($archivo);

//----------------------------------- ESPECIALES------------------------------------------------


/*
Con archivos o ficheros tambien podemos hacer mas procesos tales como :
    * Verificar si esxite
    * Copíar 
    * Renombrar
    * Eliminar

A contuniación mostraremos el proceso anidado de estas opciones, se pueden manejar individualmente.
*/
$especial = true;

//VALIDAR SI EXISTE UN ARCHIVO
if (file_exists("texto_Prueba.txt")) {
    echo "<h5>El archivo si existe</h5>";
    if ($especial) {
        //COPIAR ARCHIVO
        //copy('archivo_a_copiar.txt', 'nombre_archivo_copiado') or die('error al copiar');
        copy('texto_Prueba.txt', 'nombre_archivo_copiado.txt') or die('error al copiar');
        echo "<h5>Arhivo copiado exitosamente</h5>";
        if (file_exists("nombre_archivo_copiado.txt")) {
            //RENOMBRAR ARCHIVO
            //rename('archivo_copiado.tx.', 'archivo_renombrado.txt');
            rename('nombre_archivo_copiado.txt', 'archivo_renombrado.txt');
            echo "<h5>Archivo renombrado exitosamente</h5>";
            if (file_exists("archivo_renombrado.txt")) {
                //ELIMINAR ARCHIVO
                //unlink('archivo_borrar.txt') or die('Error al borrar');
                unlink('archivo_renombrado.txt') or die('Error al borrar');
                echo "<h5>Archivo eliminado exitosamente</h5>";
            } else echo "<h5>El archivo no pudo ser eliminado </h5>";
        } else echo "<h5>El archivo no pudo ser renombrado </h5>";
    } else echo "<h5>El archivo no pudo ser copiado </h5>";
} else echo "<h5>El archivo no existe </h5>";
