<?php

/* 
    Cookie:
    Es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos
    o rastrear el comportamiento del mismo usuario en nuestra web
*/

//CREANDO UNA COOKIE

//Estructura de una cookie:
// setcookie("nombre", "valor que solo puede ser texto",caducidad, ruta, dominio);

//Cookie básica:
setcookie("micookie", "Valor de mi galleta");

// Cookie con caducidad:
setcookie("cookie_un_año", "La cookie tiene vigencia de un año", time() + (60 * 60 * 24 * 365));
header('Location:ver_cookies.php');
