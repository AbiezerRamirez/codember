<?php
$file = file('users.txt');

$count = 0;
$user = [];
$lastUserName = '';

foreach ($file as $line) {
    if (!preg_match('/^\s$/', $line)) {
        foreach (explode(' ', $line) as $value) {
            $userAttribute = explode(':', $value);
            $user[$userAttribute[0]] = trim($userAttribute[1]);
        }
    } else {
        if (
            array_key_exists('usr', $user) &&
            array_key_exists('eme', $user) &&
            array_key_exists('psw', $user) &&
            array_key_exists('age', $user) &&
            array_key_exists('loc', $user) &&
            array_key_exists('fll', $user)
        ) {
            $count++;
            $lastUserName = $user['usr'];
            $user = [];
        }
    }
}

echo "submit {$count}{$lastUserName}";
