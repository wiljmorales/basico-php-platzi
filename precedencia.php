<?php

$contador = 1;

// en este caso se ejucuta primero la signacion
// y luego se incrementa el valos der $contador
$resultado = $contador++;

echo $resultado;

echo("\n");
// precedencia de derecha

$michis_4_patas = true;
$michis_programan_con_PHP = false;

$resultado = $michis_4_patas and $michis_programan_con_PHP;

var_dump( $resultado );

echo("\n");

// para que se ejecute primero la comparacion se 
// deben usar parentesis
$resultado_2 = (true and false);

var_dump($resultado_2);

echo("\n");