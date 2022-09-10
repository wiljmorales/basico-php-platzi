<?php

$possible_words = ["bebida", "cambur", 'mama', 'platano', 'carro'];

define("MAX_ATTEMPTS", 6);

echo "Juego del ahorcado \n\n";

$choosen_word = $possible_words[rand(0, count($possible_words) -1)];
$word_length = strlen($choosen_word);
$dicoveredLetters = str_pad("", ($word_length * 2), "_ ");

$attempts = 0;

echo "La palabra tiene $word_length palabras\n\n";
echo ($dicoveredLetters) . "\n\n";

$userLetter = readline("Escribe una letra: ");
$userLetter = strtolower($userLetter);
