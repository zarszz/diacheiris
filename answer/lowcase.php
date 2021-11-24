<?php

function count_lowercase($word) {
    return array_reduce(str_split($word), function ($counter = 0, $current){
        if (ctype_lower($current)) return $counter += 1;
        else return $counter += 0;
    });
}

$word = readline("Masukkan string : ");
$counted_lowercase = count_lowercase($word);

echo "'{$word}' mengandung {$counted_lowercase} buah huruf kecil";
