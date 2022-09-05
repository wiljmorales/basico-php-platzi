<?php

$segundos = readline("Ingresa cuantos segundos quieres convertir: ");

$horas = (int)($segundos /3600);

$minutos = (int)(($segundos % 3600) / 60);

$segundos_restantes = $segundos - $horas * 3600 - $minutos * 60; 

echo("$horas:$minutos:$segundos_restantes");

echo("\n");