<?php

$a = 1223.45567;
$b = 334.2e2;
$c = 7E-10;

$e = 1.234567;
$f = 1.23456701;

$epsilon = 0.00001;

if($e == $f) print "son iguales";
else print "son distintos";

if(abs($e - $f)<$epsilon) print "son iguales"; //usa ese valor de epsilon para controlar hasta qué cantidad de decimales va a hacer la comprobacion
else print "son distintos";


?>