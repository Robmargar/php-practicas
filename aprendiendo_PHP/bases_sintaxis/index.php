<?php
echo 'hola mundo';
const NOMBRE = 'Beto';
$salida = "Hola  mundo, soy " . NOMBRE;
$numero = 7;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <span>
        </br>
        <?= "inicial = " . $numero ?></br>
        <? $numero++ ?>
        <?= "num incremento= " . $numero ?></br>
        <?= "decremento = " . $numero-- ?></br>
        <?= "num = " . $numero ?></br>
        <?= "pre-incremento = " . ++$numero ?></br>
        <?= "num = " . $numero ?></br>
        <?= "pre-decremento = " . --$numero ?></br>
        <?= "num = " . $numero ?></br>
    </span>
    <h1>
        <?= $salida ?>
    </h1>
    <h2>
        <?= NOMBRE ?>
    </h2>
</body>