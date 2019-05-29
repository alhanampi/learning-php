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

print "<ul>";

for ($i=0; $i < 10; $i++) { 
  print "<li>". $i . "</li>";
}

print "</ul>";

///////////////

print "<ul>";

for ($i=10; $i > 0; $i--) { 
  print "<li>". $i . "</li>";
}

print "</ul>";

////////////////////////////

//incrementar 2 variables:
for ($i=10, $j=0; $i > 0; $i--, $j++) { 
  print "<li> Valor de i es ". $i .  ", valor de j es " . $j . "</li>";;
} 

print "</ul>";

?>





</body>
</html>