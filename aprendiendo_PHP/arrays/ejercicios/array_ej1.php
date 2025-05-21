<!-- /*
Ejercicio 1:
Hacer un programa en PHP que tenga un array con 8 nuúmers enteros y haga lo siguiente:
- Recorrerlo y mostrarlo por pantalla.
- Ordenarlo y mostrarlo por pantalla.
- Mostrar su longitud.
- Buscar un elmento
*/ -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<?php
$numeros = [72, 7, 913, 15, 38, 62, 579];
?>

<body>
    <h1>Ejercicios de Arrays 1</h1>
    <h2>Recorrerlo y mostrarlo por pantalla</h2>
    <?php
    foreach ($numeros as $numero) {
        echo "<nobr>" . $numero . ", " . "</nobr>";
    };
    ?>
    <hr>
    <h2>Ordenarlo y mostrarlo por pantalla</h2>
    <?php
    $ordenados = $numeros;
    sort($ordenados);
    foreach ($ordenados as $key => $val) {
        echo "<nobr>" . $val . ", " . "</nobr>";
    };
    ?>
    <hr>
    <h2>Mostrar su longitud</h2>
    <?php
    $longitud = count($numeros);
    echo "Longitud = " . $longitud
    ?>
    <hr>
    <h2>Mostrar elemento buscado pasado por parametro </h2>
    <?php
    $key = array_search($_GET['numero'], $numeros);
    if ($key) {
        echo '<p>' . "El numero buscado :" . $_GET['numero'] . " se encuetra en la posicion : " . $key . '</p>';
    } else {
        echo '</p>' . "El número : " . $_GET['numero'] . " No se encuentr a en el array" . '</p>';
    }


    ?>

</body>

<footer>
    <hr>
    Todos los derechos reservados &copy; Roberto Martinez <?= date("Y") ?>
    <br>
</footer>