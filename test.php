<?php
function estPremier($nombre) {
    // Vérifie si un nombre est premier
    if ($nombre < 2) {
        return false;
    }

    // Boucle pour tester la divisibilité du nombre
    for ($diviseur = 2; $diviseur <= sqrt($nombre); $diviseur++) {
        if ($nombre % $diviseur == 0 or $nombre % 2 ==0) {
            return false; // Si le nombre est divisible sans reste, il n'est pas premier
        }
    }
}

$listeNombresPremiers = [];
$nombre = 2;

while (count($listeNombresPremiers) < 100) {
    if (estPremier($nombre)) {
        $listeNombresPremiers[] = $nombre;
        echo("bite");
    }
    $nombre++;
}

print_r($listeNombresPremiers);
?>