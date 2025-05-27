<?php

/* Ahora diferencia entre isset y empty

isset= Revisa unicamente si la variable existe, sin importar si traé contenido o no.
empty= revisa si existe la variable pero tambien si viene vacia por lo tanto auqnue llegue la variable
        si su contenido es null o vacio la toma como que no a llegado la variable

Por lo tanto en esta ocasión utilizaremos empty para poder validar que el formulario no venga vacio en el caso 
de que el campo required falle.
*/

$errores = [];

function validaNombre($nombre)
{
    global $errores;
    if (preg_match("/[0-9]/", $nombre)) {
        array_push($errores, "Nombre o Apellidos no deben contener números ");
    };
};

function validaEdad($edad)
{
    global $errores;
    if (preg_match("/[a-zA-ZáéíóúÁÉÍÓÚ]/", $edad)) {
        array_push($errores, "Edad no es un número");
    };
};

function validaEmail($email)
{
    (is_int($email)) ? filter_var($email, FILTER_VALIDATE_EMAIL) : array_push($errores, "Email no tiene un formato valido");
};

(empty($_POST['name'] == false)) ?
    validaNombre($_POST['name']) :
    array_push($errores, 'Nombre vacio');

(empty($_POST['apellidop'] == false)) ?
    validaNombre($_POST['apellidop']) :
    array_push($errores, 'Apellido Paterno vacio');

(empty($_POST['apellidom'] == false)) ?
    validaNombre($_POST['apellidom']) :
    array_push($errores, 'Apellido Materno vacio');

(empty($_POST['edad'] == false)) ?
    validaEdad($_POST['edad']) :
    array_push($errores, 'Edad vacia');


var_dump($errores);
// if (
//     // !empty($_POST['edad'])
//     // ||
//     // !empty($_POST['email'])
//     // ||
//     // !empty($_POST['pass'])
//     ) {
//     $apellidop = $_POST['apellidop'];
//     $apellidom = $_POST['apellidom'];
//     $edad = $_POST['edad'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
// } else {
//     header("Location:index.php?error=$errores");
// };

?>

<!DOCTYPE html>
<html lang="es">
<header>
    <meta charset="uft-8">
    <title> Recepcion de formulario</title>
</header>

<body>

</body>

</html>