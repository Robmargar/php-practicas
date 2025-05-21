<!-- EJERCICIO 2:
 Escribir un programa con PHP que añada valores a un array mientras que su longitud sea menor 
 a 120 y luego mostrarlo por pantalla.
-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ejercicio 2 de Arrays</title>
</head>

<?php
$numeros = [];
function agregar()
{
    array_push($numeros, $_GET['numero']);
    var_dump($numeros);
};
?>


<body>
    <form>
        <label for="numero">Nuevo número: </label>
        <input type="text" name="numero" id="numero" ><br>
        <input type="submit" value="Agregar número" onclick=<?php Agregar() ?><br>
    </form>
</body>

</html>