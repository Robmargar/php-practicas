<?php

/* Para mostrar el valor de las o la cookie creada debemos usar $_COOKIE, que e suna variable superglobal
en forma de un array asociativo.}
*/


if (isset($_COOKIE['micookie'])) {
    echo "<h1>" . $_COOKIE['micookie'] . "</h1>";
} else {
    echo "<h1>" . 'No hay cookie' . "</h1>";
};

if (isset($_COOKIE['cookie_un_año'])) {
    echo "<h1>" . $_COOKIE['cookie_un_año'] . "</h1>";
} else {
    echo "<h1>" . 'No hay cookie' . "</h1>";
};

?>

<a href="index.php">Crear Cookies</a>
<a href="borrar_cookies.php">Borrar Cookies</a>