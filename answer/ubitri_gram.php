<?php

function unigram($sentence) {
    return implode(",", explode(" ", $sentence));
}

function bitri($sentence, $n) {
    $sentence = explode(' ', $sentence);
    $bigram = '';
    $chunked =  array_chunk($sentence, $n);
    foreach ($chunked as $chunk) {
        if ($n == 2) $bigram .= $chunk[0] . ' ' . $chunk[1] . ', ';
        else if($n == 3) {
            $bigram .= $chunk[0] . ' ' . $chunk[1] . ' ' . $chunk[2] . ', ';
        }
    }
    return substr($bigram, 0, -2);
}

$sentence_input = readline("Masukkan string : ");

$unigram_result = unigram($sentence_input);

$bigram_result = bitri($sentence_input, 2);

$trigram_result = bitri($sentence_input, 3);

echo "Unigram : " . $unigram_result;
echo "\nBigram : " . $bigram_result;
echo "\nTrigram : " . $trigram_result;
