<?php
// CONDICIONALES    
// IF
/*
if (condicion) {
    codigo a ejecutar
    {else{
    otras instrucciones
    }
}
*/
$color = 'rojo';
if ($color === 'rojo') {
    echo 'el color es rojo';
} elseif ($color === 'verde') {
    echo 'el color es verde';
} else {
    echo 'el color no es rojo ni verde';
};
