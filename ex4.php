<?php
//Exercice 4 :Sur un compte épargne à 2% d’intérêts par an, on verse 100€/mois depuis le 01/01/2010. Quel sera le solde au 31/12 de l’année actuelle (intérêts de 2021 inclus) ?
echo "Tapez l'année : ";
$anneeint = trim(fgets(STDIN));
$terminus = ($anneeint - 2010);
$compte = 0;
for($i=0; $i<=$terminus; $i++){
    $compte = ($compte + 1200) * 1.02;
}
echo " Selon les intérêt à l'année $anneeint vous aurez sur votre épargne : " .number_format($compte,0,""," ")." €.";

?>