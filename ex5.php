<?php
$n = 50;
$sequence = [0, 1];

for ($i = 2; $i < $n; $i+=1) {
    $next = $sequence[$i - 1] + $sequence[$i - 2];
    $sequence[] = $next;
}

foreach ($sequence as $term) {
    echo $term . " ";
}

?>
