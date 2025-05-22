<?php
/* 
    Sesiones:
    Las sesiones almacenan y hacen persistir datos del usuario mientras navega en el sitio web, 
    hasta que cierra sesión o bien cierra el navegador.
    Las sesiones son almacenadas en el servidor, mientras que las cookies son almacenadas en el navegador del cliente.
    Las sesiones son más seguras que las cookies, ya que no se almacenan en el navegador del cliente.
*/

// Inicial la sesión
session_start();

//variable local
$variable_normal='Soy una variable normal de tipo string';

// variablede sesión , inicia con signo de dolar y el nombre reservado _SESSION seguido del nombre de la variable dentro de []
$_SESSION['variable_persistente']='Hola soy una sesión activa';

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];


