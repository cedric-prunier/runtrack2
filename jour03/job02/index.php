<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$strLength = 0;

// Parcourir la chaîne caractère par caractère jusqu'à ce que le caractère à l'indice $strLength soit une chaîne vide
while (isset($str[$strLength])) {
    if ($strLength % 2 == 0) {
        echo $str[$strLength];
    }
    $strLength++;
}
?>