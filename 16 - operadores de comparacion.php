<?php

$a = 10;
$b = "10";

print $a == $b ."<br>"; //imprime 1, true
print $a === $b  ."<br>"; //no imprime nada porque es false

if ($a === $b) {
    print "iguales";
} else {
    print "diferentes";
};
 

if ($a == $b) {
    print "iguales";
} else {
    print "diferentes";
};
 
if ($a <> $b) {
    print "diferentes"; //invertido a los ejemplos anteriores porque este chequea diferencia, no igualdad
} else {
    print "iguales";
};
 
?>