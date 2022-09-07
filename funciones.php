<?php

function get_pokemon() {

  $numero_aleatorio = rand(1,4);

  switch ($numero_aleatorio) {
    case 1:
      echo "Pikachu \n";
      break;
    case 2:
      echo "Charmander \n";
      break;
    case 3:
      echo "Mew \n";
      break;
    default:
      echo "No hay pokemon para ti =( \n";
      break;
  }

};

get_pokemon();
get_pokemon();
get_pokemon();
get_pokemon();

echo "\n";