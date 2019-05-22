<?php

$a = 2+3*4; //primero hace 3*4 y después suma 2 por precedencia

print $a . "<br>";

$a = (2+3)*4; // primero ejecuta lo de los parentesis

print $a . "<br>"; 

$a = (2+3)*4**2; // ** tiene mayor precedencia que *

print $a . "<br>"; 

?>