<?php
// pola +1 -2 +3 -4 +5 -6

function enkripsi($input) {
    $result = '';
    $alphabet = range('A', 'Z');

    $input = strtoupper($input);
    $arr_input = str_split($input);

    $increment = true;

    $counter = 1;

    $len = sizeof($arr_input) - 1;

    for ($i = 0; $i < $len; $i++) {
        $tmp = array_search($arr_input[$i], $alphabet);
        if ($increment == true) {
            $result .= $alphabet[$tmp + $counter];
            $increment = false;
        } else {
            $ne = $tmp - $counter;
            $result .= $alphabet[$ne < 0 ? $len + $ne : $ne];
            $increment = true;
        }
        $counter++;
    }

    return $result;
}

echo enkripsi('DFHKNQ');
