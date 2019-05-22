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

$contador = 0;
$veces = 7;

print "<p>Se van a visualizar" .$veces. " números</p>";
while ($contador < $veces) {
  print "<p>Número: ".$contador. "</p>";
  $contador++; //recorre hasta llegar al valor de veces
}
print "Fin del ciclo.";


?>

</body>

</html>