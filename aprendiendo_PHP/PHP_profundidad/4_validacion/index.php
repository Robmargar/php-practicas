<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario para validar</title>
</head>

<body>
    <h1>Validar formulario en PHP </h1>
    <form method="POST" action="procesar_formulario.php">
        <div>
            <label for="name">Nombre: </label>
            <input type="text" name="name" required="required" pattern="^[a-zA-Záéíóú]+$">
        </div>
        <div>
            <label for="apellidop">Apellido Paterno: </label>
            <input type="text" name="apellidop" required="required" pattern="^[a-zA-Záéíóú]+$">
        </div>
        <div>
            <label for="apellidom">Apellido Materno: </label>
            <input type="text" name="apellidom" required="required" pattern="^[a-zA-Záéíóú]+$">
        </div>
        <div>
            <label for="edad">Edad: </label>
            <input type="number" name="edad" required="required" pattern="^[0-9]+$">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" required="required" pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/">
        </div>
        <div>
            <label for="pass">Password: </label>
            <input type="pasword" name="pass" required="required">
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>