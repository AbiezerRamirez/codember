<?php
$mecenas = json_decode(file_get_contents('mecenas.txt'), true);

$flag = true;

while (sizeof($mecenas) > 1) {
    foreach ($mecenas as $key => $value) {
        if (!$flag) {
            $mecenas[$key] = 'x';
        }

        $flag = $flag ? false : true;
    }

    $mecenas = array_filter($mecenas, fn ($member) => $member !== 'x');
}

$key = key($mecenas);
$winner = current($mecenas);

echo "submit $winner-$key";
