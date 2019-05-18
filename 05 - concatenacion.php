<?php

$nombre = "Jean Luc Picard";

$titulo = 'Capitan';

$nave = "\"Enterprise D\"";

$salida = $nombre. " ";
$salida .= $titulo. " ";
$salida .= $nave;

print $salida;

$TNG = <<<EOD
$titulo $nombre de la nave $nave <br>
EOD;

print $TNG;

print $nombre.", " . "<br>" . $titulo. "<br>". "de la" . $nave . "<br>";





?>