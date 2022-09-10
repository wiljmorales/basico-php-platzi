<?php

function clear() {
  if (PHP_OS === "WINNT") {
    system('cls');
  } else {
    system('clear');
  }
}

$possible_words = ["bebida", "cambur", 'mama', 'platano', 'carro'];

define("MAX_ATTEMPTS", 6);

echo "Juego del ahorcado \n\n";

$choosen_word = $possible_words[rand(0, count($possible_words) -1)];
$word_length = strlen($choosen_word);
$dicoveredLetters = str_pad("", ($word_length ), "_");

$attempts = 0;

do {

  echo "La palabra tiene $word_length letras\n\n";
  echo ($dicoveredLetters) . "\n\n";
  
  $userLetter = readline("Escribe una letra: ");
  $userLetter = strtolower($userLetter);
  
  if (str_contains($choosen_word, $userLetter)) {
    $offset = 0;
    while (($letter_position = strpos($choosen_word, $userLetter, $offset)) !== false) {
      $dicoveredLetters[$letter_position] = $userLetter;

      $offset = $letter_position + 1;
    }
  } 
  else {
    clear();
    $attempts++;
    echo "Letra incorrecta. Te quedan ". (MAX_ATTEMPTS - $attempts) . " intentos \n";
    sleep(2);
  }
  clear();
} while ($attempts < MAX_ATTEMPTS && $dicoveredLetters != $choosen_word);

clear();

if($attempts < MAX_ATTEMPTS)
  echo "Ganaste!!! \n\n";
else
  echo "perdiste la palabra era " . $choosen_word;

echo "\n";
