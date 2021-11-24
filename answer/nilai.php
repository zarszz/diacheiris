<?php

$grade = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$grade = array_map('intval', explode(" ", $grade));

$avg = array_reduce($grade, function ($val, $curr){
    return $val + $curr;
}) / sizeof($grade);

array_multisort($grade, SORT_DESC, SORT_NUMERIC);

$seven_first_highesh = array_slice($grade, 0, 7);

$seven_last_lowest = array_slice($grade, sizeof($grade) - 7, sizeof($grade));

echo "rata-rata : " . strval($avg);
echo "\n7 nilai tertinggi : " . implode(' ', $seven_first_highesh);
echo "\n7 nilai terendah : " . implode(' ', $seven_last_lowest);
