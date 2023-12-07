<?php
$userInput = "";
$listValues = [];

while ($userInput != "ok") {
    fwrite(STDOUT, "donner un nombre ou ok pour finir : ");
    $userInput = trim(fgets(STDIN));
    if (is_numeric($userInput)) {
        array_push($listValues, $userInput);
    }
}

echo array_sum($listValues) / count($listValues), PHP_EOL;
echo "Nombre de valeur entrée : " .count($listValues);

?>