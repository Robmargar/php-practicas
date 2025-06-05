<?php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Subir Archivos en PHP</title>
</head>

<body>
    <h1>Subir archivos y guardarlos localmente</h1>
    <form action="guardar.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" accept=".jpg, .jpeg, .png, .bmp, .svg">
        <input type="submit" name="Enviar">
    </form>
    <hr>
    <h2> Imagenes guardadas hasta el momento</h2>
    <?php
    $listado_imagenes = opendir('./imagenes');
    if ($listado_imagenes) {
        while (($imagen = readdir($listado_imagenes)) !== false) {
            if ($listado_imagenes !== '.' && $listado_imagenes !== '..') {
                echo "<img src='imagenes/$imagen' width='200px'>";
            };
        };
    };
    ?>
</body>

</html>