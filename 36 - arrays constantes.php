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

define('ANIMALES', [
    'perro',
    'gato',
    'pajarito'
]);

print "<pre>"; //con pre no imprime todo en una sola linea
var_dump(ANIMALES);
print "</pre>";

foreach (ANIMALES as $key => $value) {
    print $value."<br>";
;};

print ANIMALES[2];

// ANIMALES[1]="conejo"; //esto tiraria error

?>
    
</body>
</html>