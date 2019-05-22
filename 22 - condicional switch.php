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

$estado = "aburrido";
print "Lo invitamos ";
// de acuerdo a lo que estado tenga como valor, a qué valor de switch entra. Si ninguno coincide, cae en el default.
switch ($estado) {
  case 'soltero':
  case 'soltera':
    print "a conocer gente.";
    break;
  
  case 'casado':
  case 'separado':
  case: 'otro': //las 3 opciones entran en el mismo case.
  print "a pasarla bien.";
  break;

  default:
    print "a viajar.";
    break;
}

print " Última oración, la pega después de los case no importa a cuál entre. "

?>

</body>

</html>