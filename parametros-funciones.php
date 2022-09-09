<?php

function suma($a= 0, $b = 0) {
  echo "la suma de $a + $b es: ". $a + $b;
}

//suma();

$arreglo1 = [1, 2, 3];
$arreglo2 = [4, 5, 6];

$resultado = [...$arreglo1, ...$arreglo2];

// var_dump($resultado);

// ... es array unpaking
$numeros = [1,2];

suma(...$numeros);
echo "\n";

function suma_infinita(...$params) {
  $result = 0;
  foreach($params as $numero) {
    $result += $numero;
  }
  echo $result . "\n";
}

suma_infinita(1, 2,3,4,7);
suma_infinita(1, 2,7);
suma_infinita(1,4,7);

echo "\n";