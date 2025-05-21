<?php
// VARIABLES DEL SERVIDOR
echo '<h1>Super Globales</h1>';
echo '<h2>';

// $_SERVER es una superglobal que contiene información sobre el servidor y el entorno de ejecución

// $_SERVER['SERVER_SOFTWARE'] devuelve información sobre el software del servidor web
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h2>';

echo '<h2>';
// $_SERVER['HTTP_USER_AGENT'] devuelve información sobre el navegador del cliente
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h2>';
