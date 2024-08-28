<?php

$numeros =[0,1,2,3,4,5,6,7,8,9,];

echo "<pre>";
print_r($numeros);
echo "<br>";
echo "<hr>";
echo "<pre>";

echo "<pre>";
$numeros[0] = 100;
$numeros[4] = 500;
$numeros[9] = 1000;
print_r($numeros);
echo "<br>";
echo "<hr>";
echo "</pre>";

echo " Os valores que mudaram foram o $numeros[0],$numeros[4] e o $numeros[9] ";
echo "<br>";
echo "<hr>";







?>