<?php
$colors = json_decode(file_get_contents('colors.txt'), true);

$zebra = [
    'oldColor' => '',
    'currentColor' => '',
    'count' => 0,
    'maxCount' => 0,
    'finalColor' => ''
];

foreach ($colors as $color) {
    $zebra['count'] = ($color !== $zebra['currentColor'] && $color === $zebra['oldColor'])
        ? $zebra['count'] + 1
        : 2;
    $zebra['oldColor'] = $zebra['currentColor'];
    $zebra['currentColor'] = $color;

    if ($zebra['count'] > $zebra['maxCount']) {
        $zebra['maxCount'] = $zebra['count'];
        $zebra['finalColor'] = $color;
    }
}

echo "submit {$zebra['maxCount']}@{$zebra['finalColor']}";
