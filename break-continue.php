<?php 

$tienda_de_cafes = [
  "Americano" => 20,
  "Ralentado" => 10,
  "Latte" => 15,
  "Mocca" => 22
];

foreach ($tienda_de_cafes as $cafe => $price) {
  echo "Actualmente encontre a $cafe \n";

  if ($cafe == "Latte") {
    echo "Encontramos a latte \n";
    break;
  };

};

foreach ($tienda_de_cafes as $cafe => $price) {
  
  if ($cafe == "Recalentado") {
    continue;
  };
  
  echo "El $cafe es muy rico\n";
};

