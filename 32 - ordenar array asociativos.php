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

  $alumno = array(
    "nombre" => "Juan",
    "apellido" => "Zoilez",
    "puesto" => "empleado",
    "num" => 14
  );

  foreach ($alumno as $key => $value) {
    print "<p> Los datos ordenados son: ".$key . " es " . $value . "</p>";
  }


  asort($alumno);
  foreach ($alumno as $key => $value) {
    print "<p> Los datos ordenados son: ".$key . " es " . $value . "</p>";
  }

  ?>
</body>
</html> 