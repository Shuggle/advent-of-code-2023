<?php

$fileContent = file_get_contents('day_1/input.txt');
$rows        = explode(PHP_EOL, $fileContent);

$sum = 0;
foreach ($rows as $row) {
    preg_match_all('/\d/', $row, $matches);
    $matches     = $matches[0];
    $firstDigit  = $matches[0];
    $lastDigit   = $matches[count($matches) - 1];
    $number = intval(implode([$firstDigit, $lastDigit]));
    $sum += $number;
}

echo $sum . PHP_EOL;