<?php

$objetivo = 6;
$anterior = 0;
$actual = 1;
$temporal = 0;

for ($i = 1; $i < $objetivo; $i++) {
  $temporal = $actual;
  $actual += $anterior;
  $anterior = $temporal;
}

echo $actual . "\n";