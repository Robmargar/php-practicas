<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario de PHP</title>
</head>

<body>    
    <!-- /* El problema con mandar datos por GET es que se envían en la URL, lo que puede ser un problema de seguridad si se envían datos sensibles. Por eso, es mejor usar POST para enviar datos sensibles. */
    /* En este caso, el formulario envía los datos a la página recibir.php, que es donde se procesan los datos. */ -->
    <h1>Formulario de PHP</h1>
    <form method="GET" action="recibir.php">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" id="apellidos"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="Enviar datos">
    </form>
</body>

</html>