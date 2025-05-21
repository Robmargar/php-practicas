<?php

echo '<h1>';
echo 'Datos recibidos por POST:';
echo '</h1>';

echo '<h2>' . 'Hola ' . $_POST['nombre'] .   ' ' . $_POST['apellidos'] . 'tu email es : ' . $_POST['email'] . '</h2>';

// var_dump($_POST);
