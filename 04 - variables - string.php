<?php

$string = "string dobles 'php' <br>";

$string2 = 'comillas simples "php" <br>';

$name = "Pam";

print $string;
print $string2;


$heredoc = <<<EOD
Mi nombre es $name <br>
EOD;

print $heredoc;



print <<<'EOD'
Mi nombre es $name <br>
EOD;


?>