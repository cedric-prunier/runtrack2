<?php
// Compte les caractères avec les espaces
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;
$strLenght = 0;

while (isset($str[$strLenght])) {
    $count++;
    $strLenght++;
}

echo "Le nombre de caractères dans la chaîne est : " . $count . "<br/>";

// Compte les caractères sans les espaces
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;
$strLenght = 0;

while (isset($str[$strLenght])) {
    if ($str[$strLenght] != " ")
        $count++;
    $strLenght++;
}

echo "Le nombre de caractères dans la chaîne est : " . $count;

?>