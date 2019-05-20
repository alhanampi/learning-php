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

    $ciudad1 = 3534343;
    $ciudad2 = 345343433;
    $ciudad3 = 4343;
    //variable de variables
    $ciudad = "ciudad1";

    print "<p> La población de la $ciudad es de ${$ciudad} </p>"; //en el primer caso pasa el nombre, en el segundo el valor



    define("TASA_CAMBIO", 13.35, true); // nombre, valor, case insensive
    $deuda = 346323;
    print "Tu deuda es de ". ($deuda*Tasa_CAMBIO);

?>


</body>
</html>