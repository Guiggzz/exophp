<?php
// Déterminer si deux tableaux (en variables) sont strictement identiques (exactement les mêmes valeurs dans le même ordre)
$tab1 = [0, 1, 2, 3, 4, 5, 6];
$tab2 = [0, 1, 2, 5, 4];

if(count($tab1) == count($tab2)){
    for($i = 0; $i < count($tab1) and $i<count($tab2); $i++){
        if($tab1[$i]===$tab2[$i]){
            echo $i, PHP_EOL;
        }
        else{
            echo"false";
            break;
            }
        }
    }
else{
    echo"false";
    return;
}
?>