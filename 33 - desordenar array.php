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
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  
//desordena con shuffle, y cada vez qye se ejecuta, cambia el orden:
shuffle($meses);
print "<ul>";
foreach ($meses as $key => $value) {
  print "<li>".$value."</li>";
};
print "</ul>"."<hr>";

//agarrar solo dos, e imprimir clave:
$mes = array_rand($meses, 2);
print "<ul>";
foreach ($mes as $key => $value) {
  print "<li>".$value."</li>";
};
print "</ul>"."<hr>";
//imprimir con nombre de la clave:
print "<ul>";
foreach ($mes as $key => $value) {
  print "<li>".$value. " ". $meses[$value]."</li>";
};
print "</ul>"."<hr>";


?>
</body>
</html>