<?php

$aujourdhuij = 16;
$aujourdhuim = 10;
$aujourdhuian = 2023;

echo "Tapez votre jour de naissance : ";
$jour_user = trim(fgets(STDIN));
echo "Tapez votre mois de naissance : ";
$mois_user = trim(fgets(STDIN));
echo "Tapez votre année de naissance : ";
$annee_user = trim(fgets(STDIN));

$agean = $aujourdhuian - $annee_user;
$agemois = $aujourdhuim - $mois_user;
$agejour = $aujourdhuij - $jour_user;

if ($aujourdhuim < $mois_user || ($aujourdhuim == $mois_user && $aujourdhuij < $jour_user)) {
    $agean-=1;
    $agemois = 12 - $agemois;
}

if ($aujourdhuij < $jour_user) {
    $agemois-=1;
    $agejour = $agejour + 30;
}

if ($agejour > 30) {
    $agejour = $agejour % 30;
    $agemois+= 1;
}

echo "Votre âge aujourd'hui est : $agean années, $agemois mois et $agejour jours";
?>