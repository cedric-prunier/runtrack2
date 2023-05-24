<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reversedStr = '';

// Trouver le dernier indice de la chaîne en incrémentant l'index jusqu'à ce que le caractère soit une chaîne vide
$index = 0;
while (isset($str[$index])) {
    $index++;
}

// Parcourir la chaîne de la fin vers le début en utilisant l'indice décroissant
$index--;
while ($index >= 0) {
    $reversedStr .= $str[$index];
    $index--;
}

echo $reversedStr;
?>