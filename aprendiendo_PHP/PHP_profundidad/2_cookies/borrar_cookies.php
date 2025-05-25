<?php


if ($_COOKIE['micookie']) {
    unset($_COOKIE['micookie']);
    // Para borrar una cookie debemos caducar la cookie primero 
    setcookie('micookie', '', time() - 1000);

    unset($_COOKIE['cookie_un_año']);
    setcookie('cookie_un_año', '', time() - 1000 * 100 * 1000 * 1000);
}
header('Location:ver_cookies.php');
