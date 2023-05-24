<?php
$str = "Les choses que l'on possede finissent par nous posseder.";
$reverseStr = '';
$index = 0;

// Trouver le dernier indice de la chaîne en incrémentant l'index jusqu'à ce que le caractère soit une chaîne vide
while (isset($str[$index])) {
    $index++;
}

// Parcourir la chaîne de la fin vers le début en utilisant l'indice décroissant
while ($index >= 0) {
    $reverseStr .= $str[$index];
    $index--;
}

echo $reverseStr;
?>