<?php
    // Il y a 2,7 naissances et 1,9 décès par seconde dans le monde 
    // Afficher la variation de la population par minute, heure, jour et année
    
    $naissances_par_seconde = 2.7;
    $deces_par_seconde = 1.9;

    // Variation de la population par seconde
    $variation_par_seconde = $naissances_par_seconde - $deces_par_seconde;

    // Variation de la population par minute
    $variation_par_minute = $variation_par_seconde * 60;

    // Variation de la population par heure
    $variation_par_heure = $variation_par_minute * 60;

    // Variation de la population par jour
    $variation_par_jour = $variation_par_heure * 24;

    // Variation de la population par année
    $variation_par_annee = $variation_par_jour * 365;

    // Affichage des résultats
    echo "Variation de la population (en personnes) par seconde : $variation_par_seconde, 
    par minute : $variation_par_minute, 
    par heure : $variation_par_heure, 
    par jour :  $variation_par_jour , 
    par année : $variation_par_annee" ;
