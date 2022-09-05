<?php

$edades = array(
  "Carlos" => 20,
  "Tommy" => 18,
  "Juan" => 40,
);

echo "La edad de Carlos es " . $edades["Carlos"] . "\n";

echo "La edad de Tommy es {$edades["Tommy"]}";

echo "\n";

$personas = array(
  "Carlos" => array(
    "edad" => 20,
    "apellido" => "Ferrero"
  ),
);

echo $personas["Carlos"]["edad"]. "\n";