<?php
/* 
@param $nota1 int
@param $nota2 int
@param $nota3 int
@param $promedio float
*/
// Solicitudes
echo "Ingrese la primera nota: ";
$nota1 = trim(fgets(STDIN));

echo "Ingrese la segunda nota: ";
$nota2 = trim(fgets(STDIN));

echo "Ingrese la tercera nota: ";
$nota3 = trim(fgets(STDIN));

// Calcular el promedio
$promedio = ($nota1 + $nota2 + $nota3) / 3;

// Mostrar el promedio
echo "El promedio de las notas es: " . $promedio . "\n";
?>