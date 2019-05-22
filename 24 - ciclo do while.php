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

//algoritmo para encontrar binarios:

$numero = 9;
$binario = "";

do {

  $d = $numero % 2;
  //concatenar de forma inversa
  $binario = $d.$binario; //concatena los residuos, entonces solo van a dar 0 o 1
  $numero =intval($numero/2); // va a dar 4 en la primera vuelta, sigue siendo mayor a 2. Cuando es menor a eso, ahí va a frenar.

} while ($numero>=2);

$binario = $numero.$binario;

print $binario;

?>

  
</body>
</html>