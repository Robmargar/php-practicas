<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario para validar</title>
</head>

<body>
    <h1>Validar formulario en PHP </h1>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan_valores') {
            echo '<h1 style="color:red">Algunos datos del formulario no fueron llenados correctamente </h1>';
        }
    }
    ?>
    <form method="POST" action="procesar_formulario.php">
        <div>
            <label for="name">Nombre: </label>
            <input type="text" name="name" required="required">
        </div>
        <div>
            <label for="apellidop">Apellido Paterno: </label>
            <input type="text" name="apellidop" required="required" >
        </div>
        <div>
            <label for="apellidom">Apellido Materno: </label>
            <input type="text" name="apellidom" required="required" >
        </div>
        <div>
            <label for="edad">Edad: </label>
            <input type="text" name="edad" required="required">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" required="required">
        </div>
        <div>
            <label for="pass">Password: </label>
            <input type="password" name="pass" required="required">
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>