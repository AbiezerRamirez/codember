<?php
$abc = 'abcdefghijklmnopqrstuvwxyz';
$asciiTable = [];

foreach (str_split($abc) as $letter) {
    $asciiTable[ord($letter)] = $letter;
}

$file = file_get_contents("encrypted.txt");

$character = '';
$message = '';

foreach (str_split($file) as $number) {
    $character .= $number;

    if (key_exists($character, $asciiTable) || $character === ' ') {
        $message .= $character !== ' ' ? $asciiTable[$character] : ' ';
        $character = '';
    }
}

echo "submit $message";
