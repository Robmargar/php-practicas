<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<?php
$nombres = ["Ale", "Eli", "Shmuel", "Beto"];

//var_dump($nombres); // array(4) { [0]=> string(3) "Ale" [1]=> string(3) "Eli" [2]=> string(6) "Shmuel" [3]=> string(4) "Beto" }
$nombres[] = "Sky";
//var_dump($nombres); // array(4) { [0]=> string(3) "Ale" [1]=> string(3) "Eli" [2]=> string(6) "Shmuel" [3]=> string(4) "Beto" }

?>

<body>
    <h1>Arrays</h1>
    <h2>Recorrido con Foreach</h2>
    <?php
    // Recorrido con Foreach
    foreach ($nombres as $nombre) {
        echo $nombre . "<br>";
    };
    ?>
    <hr>
    <h2>Recorrido con For</h2>
    <ul>
        <?php
        // Recorrido con For    
        for ($i = 0; $i < count($nombres); $i++) {
            echo "<li>" . $nombres[$i] . "</li>";
        }
        ?>
    </ul>
</body>

</html>