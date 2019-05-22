<?php

$usuario = $_GET["usuario"]??$_POST["usuario"]??"anonimo"; //si no recibe nada por get o por post, devuelve anonimo. Si en la url pongo un ?isuario=nombre, va a devolver nombre, es un get (no puede simularse un post)

print $usuario;


?>