<?php

session_start();

// la siguiente línea de código va a dar un error puesto que $variable_normal no se encuentra inicializana y no existe dentro de este fichero.
// echo $variable_normal;

echo $_SESSION['variable_persistente'];