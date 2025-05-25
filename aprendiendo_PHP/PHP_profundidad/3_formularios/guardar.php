<?php

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])) {
    echo "<h1>" . "Hola " . $_POST['nombre'] . " " . $_POST['apellido'] . " tu edad es de: " . $_POST['edad'] . " años." . "</h1>";
}
