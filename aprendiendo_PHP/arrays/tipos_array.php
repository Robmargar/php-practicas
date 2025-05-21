<?php

// ARRAYS DE INDICES NUMÉRICOS
// Un array de índices numéricos es un array que utiliza índices numéricos para acceder a sus elementos.
$nombres = ["Ale", "Eli", "Shmuel", "Beto"];


//ARRAYS ASOCIATIVOS

// Un array asociativo es un array que utiliza claves en lugar de índices numéricos.
$persona = [
    "nombre" => "Ale",
    "apellido" => "Gonzalez",
    "edad" => 25,
    "ciudad" => "Madrid"
];
// Tambien existen arrays multidimensionales, que son arrays dentro de arrays.
// En este caso, tenemos un array asociativo dentro de un array con indice numérico.
$personas = [
    [
        "nombre" => "Ale",
        "apellido" => "Rios",
        "edad" => 35,
        "ciudad" => "Macedonia"
    ],
    [
        "nombre" => "Eli",
        "apellido" => "Piedra",
        "edad" => 5,
        "ciudad" => "Cuculcan"
    ],
    [
        "nombre" => "Shmuel",
        "apellido" => "Bodoque",
        "edad" => 2,
        "ciudad" => "Dinamita"
    ],
    [
        "nombre" => "Beto",
        "apellido" => "Tronco",
        "edad" => 40,
        "ciudad" => "México"
    ]
];

echo $personas[0]["nombre"] . "<br>"; // Ale
echo $personas[1]["apellido"] . "<br>"; // Eli

foreach ($personas as $persona) {
    echo "nombre:" . $persona["nombre"] . "<br>" . "apellido:" . $persona["apellido"] . "<br>" . "edad:" . $persona["edad"] . "<br";
};
