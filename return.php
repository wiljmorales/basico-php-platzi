<?php

function freddy() {
  $numero_aleatorio = rand(1, 4);

  switch($numero_aleatorio) {
    case 1:
      $frase_de_freddy = "Nunca pares de aprender";
      break;
    case 2:
      $frase_de_freddy = "Las empresas no son familia";
      break;
    case 3:
      $frase_de_freddy = "La tecnologia es el futuro";
      break;
    case 4:
      $frase_de_freddy = "Amo PHP";
      break;
  }

  return $frase_de_freddy;
}

echo freddy();

echo "\n";