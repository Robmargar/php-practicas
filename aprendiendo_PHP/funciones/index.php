<?php
// Definición de la función
function hola_beto()
{
    // Definición de la variable
    $nombre = "Beto";
    // Imprimir la variable
    echo "<h1>Hola $nombre hoy va a ser un gran día</h1>";
};

hola_beto(); // Llamada a la función

function yo_soy($nombre, $edad, $ciudad)
{
    echo "<h1>Hola $nombre hoy va a ser un gran día en $ciudad,<br> por que cumples $edad años.</h1>";
};

yo_soy("Beto", 37, "Ciudad de México"); // Llamada a la función

function consecutivos($numero)
{
    $indice = 0;
    $contador = $numero;
    echo "Los números consecutivos del $numero son:<br>";
    do {
        $numero++;
        echo "$numero<br>";;
        $indice++;
    } while ($indice < $contador);
};
consecutivos(7); // Llamada a la función

//Funcion isset , es una función que verifica si una variable está definida y no es null
function ejemplo_isset($variable)
{
    if (isset($variable)) {
        echo "La variable está definida <br>";
    } else {
        echo "La variable NO está definida o es null<br>";
    }
};

ejemplo_isset("hola"); // Llamada a la función
ejemplo_isset(null);

//Combinar la funcion isset con la función.

if (isset($_GET["numero"])) {
    consecutivos($_GET["numero"]);
} else {
    echo "No se ha enviado el número<br>";
};
