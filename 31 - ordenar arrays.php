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

$dias[]= "lunes";
$dias[]= "martes";
$dias[]= "miercoles";
$dias[]= "jueves";
$dias[]= "viernes";
$dias[]= "sabado";
$dias[]= "domingo";

//sort alfabético:
sort($meses);


foreach ($meses as $key => $value) {
  print "<p>Meses ordenados: [".$key."] =".$value . "</p>";
  }
print "<hr>";

////////////////////////

//Si ordeno sin una bandera que sea insensible a case, primero va a poner las mayusculas y después las minusculas:
$alumnos[0]="Juan";
$alumnos[1]="pedro";
$alumnos[2]="Luisa";
$alumnos[3]="Ana";
$alumnos[4]="alejandro";

sort($alumnos);
foreach ($alumnos as $key => $value) {
  print "<p>Alumnos ordenados: [".$key."] =".$value . "</p>";
}
print "<hr>";

//para que ordene correctamente pongo la bandera:
sort($alumnos, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($alumnos as $key => $value) {
  print "<p>Alumnos ordenados: [".$key."] =".$value . "</p>";
}
print "<hr>";

///ordenar numeros
$cal = array(2, 5, 17, 55, 23, 7, 95, 65, 32,150);

sort($cal, SORT_NUMERIC);
foreach ($cal as $key => $value) {
  print "<p> Los números ordenados son [".$key."] = ".$value ."</p>";
}
print "<hr>";

///como el 1 viene primero en ascii, va a ir primero con los que empiecen en 1, despues 2, etc
sort($cal, SORT_STRING);
foreach ($cal as $key => $value) {
  print "<p> Los números ordenados son [".$key."] = ".$value ."</p>";
}
print "<hr>";

?>

</body>

</html>