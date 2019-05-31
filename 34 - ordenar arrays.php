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

$cal = array(2, 5, 17, 55, 23, 7, 95, 65, 32,150);

//ordena descendente:
rsort($cal);
var_dump($cal);

print "<ul>Los números de forma descendente son ";
foreach ($cal as $key => $value) {
  print "<li>[".$key."]=".$value."</li>";
}
print "</ul>"."<hr>";

$alumno = array(
  "nombre" => "Juan",
  "apellido" => "Zoilez",
  "puesto" => "empleado",
  "num" => 14
);

//ordenar con value:
arsort($alumno);
foreach ($alumno as $key => $value) {
  print "<p> El valor de la propiedad ". $key. " es de: " . $value . "</p>";
};
print "<hr>";

//ordenar con key:
ksort($alumno);
foreach ($alumno as $key => $value) {
  print "<p> El valor de la propiedad ". $key. " es de: " . $value . "</p>";
};
print "<hr>";

//ordenar con key descentente:
krsort($alumno);
foreach ($alumno as $key => $value) {
  print "<p> El valor de la propiedad ". $key. " es de: " . $value . "</p>";
};
print "<hr>";

?>
  
</body>
</html>