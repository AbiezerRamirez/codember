<?php
$result = [];

for ($i = 11098; $i < 56000; $i++) {
    if (!preg_match("/5{2,}/", $i)) {
        continue;
    }

    $numberArray = $sortedNumberArray = str_split($i);
    sort($sortedNumberArray);

    if ($sortedNumberArray === $numberArray) {
        array_push($result, $i);
    }
}

$numOfResults = sizeof($result);

echo "submit $numOfResults-{$result[55]}";
