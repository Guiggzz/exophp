<?php
function estTrieCroissant($tableau) {
    $taille = count($tableau);

    // Parcours du tableau
    for ($i = 1; $i < $taille; $i++) {
        if ($tableau[$i] <= $tableau[$i - 1]) {
            return false;
        }
    }
    return true;
}
$tableau = [1, 2, 3, 4, 5];

if (estTrieCroissant($tableau)) {
    echo "Le tableau est trié en ordre croissant.";
}
 else {
    echo "Le tableau n'est pas trié en ordre croissant.";
 }
?>