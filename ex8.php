<?php
//Afficher les 50 premières valeurs de la suite de Fibonacci à l’aide d’un tableau
$tab= [0,1];
for($i=1;$i<=51;$i++){
    $tab[]= $tab[$i]+$tab[$i-1];
    echo $tab[$i] .PHP_EOL;
}
?>