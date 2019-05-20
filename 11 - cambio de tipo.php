<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php

$div = 10/3; //es un float

echo $div."<br>";

$entero = (integer) $div; //lo convierto a integer
//si intentara hacer acá la división, devolvería un float. La conversión debe hgacerse después de la operación

echo $entero. "<br>";

var_dump($div). "<br>"; //muestro el tipo con var_dump
var_dump($entero). "<br>";


print intval(10/3). "<br>"; //fuerzo a que sea int por medio de funcion

settype($div, "string"); //fuerzo el tipo con funcion

var_dump($div). "<br>";

print gettype($div); //muestro el tipo

?>
</body>
</html>