<?php

$a = false;
$b = true;

if($a && $b) {
  print "dos verdaderos <br>";
} else {
  print "no son dos verdaderos <br>";
}

if($a || $b) {
  print "alguno es verdadero <br>";
} else {
  print "ninguno es verdadero <br>";
}


if($a xor $b) {
  print "solo uno es verdadero <br>";
} else {
  print "ambos o ninguno es verdadero <br>";
}

?>