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

//añade al final
array_push($meses, "mes13", "mes14");

//añade al ppio
array_unshift($dias, "dia0", "dia1");

//eliminar uno al ppio:
array_shift($meses);

//pasar elementos a otro array: de array meses, quiero desde el 12 mover 2:
$mesesNuevos = array_slice($meses, 9,2);

//eliminar de array:
$diasEliminados = array_splice($dias, 1,2);

//une arrays
$mesesDias = array_merge($meses, $dias);

foreach ($mesesDias as $key => $value) {
  print "<p>elemento " .$key . " con valor " . $value . "</p>";
}
print "<hr>";

foreach ($mesesNuevos as $key => $value) {
  print "<p>Meses sacados: ". $value . "</p>";

}

print "<hr>";

foreach ($diasEliminados as $key => $value) {
  print "<p>Días eliminados: ". $value . "</p>";

}

?>

</body>

</html>