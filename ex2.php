<?php
    //Exercice 2 : Déterminer si l’année saisie par l’utilisateur est bissextile
    $annee= trim(fgets(STDIN));
    $bissextile4 = $annee % 4;
    $bissextile100 = $annee % 100;
    $bissextile400 = $annee % 400;

    if($bissextile4 == 0 and $bissextile100 != 0 or $bissextile400 == 0){
        echo"bissextile";
    }
    else{
        echo"pas bissexile";
    }

?>