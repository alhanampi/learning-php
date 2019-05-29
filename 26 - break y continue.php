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

for ($i=0; $i < 10 ; $i++) { 
  if ($i== 7 ) {
    print "<p> Número mágico:" . $i . "</p>";
    }
  print "<p> El valor de i es:" . $i. "</p>";
}
print "<p> fin del ciclo </p> <br> <br>";

////////////////// con break:


for ($i=0; $i < 10 ; $i++) { 
  if ($i== 7 ) {
    print "<p> Número mágico:" . $i . "</p>";
    break; // una vez que llega a esta condicion corta y no sigue recorriendo
  }
  print "<p> El valor de i es:" . $i. "</p>";
}
print "<p> fin del ciclo </p> <br> <br>";



////////////////// con continue:


for ($i=0; $i < 10 ; $i++) { 
  if ($i%2 == 0 ) continue; //con este continue se saltea todos los que den resto 0
  print "<p> El valor de i es:" . $i. "</p>";
}
print "<p> fin del ciclo </p> <br> <br>";



////////otro con break, usándolo para cortar una ejecucion:

for ($i=0; ; $i++) { 
  if ($i > 10 ) break; //omito la expresion de control en el for, pero uso el break para lo mismo
  print "<p> El valor de i es:" . $i. "</p>";
}
print "<p> fin del ciclo </p> <br> <br>";



////////otro con break, con un for vacio:

$i = 0;
for (; ; ) { 
  if ($i > 10 ) break; 
  print "<p> El valor de i es:" . $i. "</p>";
  $i++;
}
print "<p> fin del ciclo </p> <br> <br>";

?>
  
</body>
</html>