<?php

date_default_timezone_set("America/Caracas");

function obtener_hora() {
  return date('h:i a');
}

echo "Me podrias decir la hora?";
echo "La hora es " . obtener_hora();