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

foreach ($meses as $key => $value) {
print "<p> El campo " .$key . " tiene un valor de " . $value . "</p>";
};

foreach ($dias as $key => $value) {
  print "<p>La posición " .$key . " contiene al día " . $value . "</p>";
  };

?>

</body>

</html>