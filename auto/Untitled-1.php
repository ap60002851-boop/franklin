<?php

$apellido = "Romero";
$nombre = "Franklin";
$edad = 19;

// Contar letras del apellido
$letras = strlen($apellido);

// Crear código
$codigo = strtoupper(substr($apellido, 0, 2)) . "2026";

// Frutas favoritas
$frutas = array("uva", "naranja", "Fresa" , "pera" , "mango");

// Mostrar datos
echo "<h2>Registro del Alumno</h2>";

echo "Nombre: " . $nombre . " " . $apellido . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Letras del apellido: " . $letras . "<br>";
echo "Codigo: " . $codigo . "<br>";

echo "<h3>Frutas Favoritas</h3>";

foreach($frutas as $fruta){
    echo "- " . $fruta . "<br>";
}

?>