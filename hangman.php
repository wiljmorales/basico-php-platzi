<?php

$possible_words = ["bebida", "cambur", 'mama', 'platano', 'carro'];

define("MAX_ATTEMPS", 6);

echo "Juego del ahorcado \n\n";

$choosen_word = $possible_words[rand(0, count($possible_words))];
$word_length = strlen($choosen_word);
