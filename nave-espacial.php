<?php 

$precios_de_cafes = [12,59,48,76,13,456,5];

usort($precios_de_cafes, function($a, $b){
  return - ($a <=> $b);
});

var_dump($precios_de_cafes);