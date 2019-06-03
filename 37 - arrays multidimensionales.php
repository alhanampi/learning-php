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

$ciudades = array(
    array(
        "Buenos Aires",
        "Córdoba",
        "San Luis"
    ),
    array(
        "Capital Federal",
        "Jujuy"
    ),
    array(
        "San Juan",
        "Bariloche"
    )
);

for ($i=0; $i < count($ciudades); $i++) { 
    print "<ul>";
    for ($j=0; $j < count($ciudades[$i]); $j++) { 
        print "<li>".$ciudades[$i][$j]."</li>";
    };
    print "</ul>";
};

?>
    
</body>
</html>