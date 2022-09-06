<?php 

$tienda_de_cafes = [
  "Americano" => 20,
  "Latte" => 15,
  "Mocca" => 22
];

foreach ($tienda_de_cafes as $cafe => $price) {
  echo "El $cafe cuesta $$price \n";
};