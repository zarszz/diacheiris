<?php
$counter = 1;
$current = 1;
$black  = [1,2,5,7,10,11];
echo "<table>";
for($i = 0; $i < 8; $i++){
    echo '<tr>';
    for($j = 0; $j < 8; $j++){
        if (in_array($current, $black)) {
            echo '<td style="background: black; color: white;">';
        } else {
            echo '<td style="background : white";>';
        }
        echo $counter++;
        echo '</td>';
        if ($current == 12) {
            $current = 1;
        } else {
            $current++;
        }
    }
    echo '</tr>';
}
  echo "</table>";
