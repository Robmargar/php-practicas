<?php


$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

// echo "<h1> El nombre de la imagen es : $nombre <h1>";
// echo "<h2> con extensión : $tipo <h2>";

if (is_dir('imagenes')) {
    move_uploaded_file($archivo['tmp_name'], 'imagenes/' . $nombre);
    header("Refresh: 2 , URL=index.php");
    echo "Imagen guardada exitosamente";
} else {
    mkdir('imagenes', 0777);
}
