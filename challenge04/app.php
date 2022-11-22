<?php
$result = [];

for ($i = 11098; $i < 56000; $i++) {
    if (!preg_match("/5{2,}/", $i)) {
        continue;
    }

    $numberArray = $sortedNumberArray = str_split($i);
    sort($sortedNumberArray);
    $isValid = $sortedNumberArray === $numberArray;

    if ($isValid) {
        array_push($result, $i);
    }
}

$numOfResults = sizeof($result);

echo "submit $numOfResults-{$result[55]}";
