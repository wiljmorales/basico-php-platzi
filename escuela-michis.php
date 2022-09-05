<?php

$michis = array(
  array (
    "nombre" => "Tommy",
    "color" => "blanco",
    "ocupacion" => "ronronear",
    "comidas" => array (
      "favorita" => "atun",
      "no le guta" => "platano"
    )
  ),
  array (
    "nombre" => "Raul",
    "color" => "negro",
    "ocupacion" => "cazar ratones",
    "comidas" => array (
      "favorita" => "ratones",
      "no le guta" => "comida para gatos"
    )
  ),
  array (
    "nombre" => "Federico",
    "color" => "marron",
    "ocupacion" => "dormir",
    "comidas" => array (
      "favorita" => "pasticho",
      "no le gusta" => "auyama"
    )
  ),
);

echo "la comida favorita de Federico es: " . $michis[2]["comidas"]["no le gusta"] . "\n";
echo "la color favorita de Tommy es: " . $michis[0]["color"] . "\n";