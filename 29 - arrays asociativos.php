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

    $meses = array(
      "mes1" => "Enero", 
      "mes2" => "Febrero", 
      "mes3" => "Marzo", 
      "mes4" => "Abril", 
      "mes5" => "Mayo", 
      "mes6" => "Junio", 
      "mes7" => "Julio", 
      "mes8" => "Agosto", 
      "mes9" => "Septiembre", 
      "mes10" => "Octubre", 
      "mes11" => "Noviembre", 
      "mes12" => "Diciembre");

print "Mes: " . $meses["mes4"];

foreach ($meses as $key => $value) {
  print "<p>". $key . " es de " . $value . "</p>";
}

print "<br> <br>";

//otra forma:

  $alumno["nombre"] = "Juan";
  $alumno["apellido"] = "Juarez";
  $alumno["puesto"] = "empleado";

  foreach ($alumno as $key => $value) {
    print "<p> El <b>" . $key . " </b> es " . $value  ."</p>";
  }


?>

</body>

</html>