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
        continue;
    }

    if (isset($user['usr'], $user['eme'], $user['psw'], $user['age'], $user['loc'], $user['fll'])) {
        $count++;
        $lastUserName = $user['usr'];
        $user = [];
    }
}

echo "submit {$count}{$lastUserName}";
