<?php

$usuarios = ["pedro", "maria"];

do {
  $usuario = readline("Por favor ingrese un nombre de usuario: ");
}while(in_array($usuario, $usuarios));

echo "usuario registrado \n";
