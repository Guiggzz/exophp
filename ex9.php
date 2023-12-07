<?php

function voyelles($chaine) {
   $compteur = 0;
   $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    
    for ($i = 0; $i < strlen($chaine); $i+=1) {
        $caractere = $chaine[$i];
        if (in_array($caractere, $voyelles)) {
            $compteur+=1;
        }
    }
    return $compteur;
}
$chaine = trim(fgets(STDIN));
echo "Le nombre de voyelles dans la phrase est : " . voyelles($chaine);

?>