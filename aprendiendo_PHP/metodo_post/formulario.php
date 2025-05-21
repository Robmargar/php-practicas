<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulario de PHP</title>
</head>

<body>
    <!-- Al enviar por metodo POST los datos ya no se muestran en la URL por lo tanto al quedar ocultos se vuelve más seguro-->
    <h1>Formulario de PHP</h1>
    <form method="POST" action="recibir.php">
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