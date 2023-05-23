<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
for ($i = 0; $i < strlen($str); $i += 1) {
    if ($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y") {
        echo $str[$i];

    }
    // Affichage en ligne
}
echo "<br /><br />"; // Ajout de l'espace

$str = "I'm sorry Dave I'm afraid I can't do that";
for ($i = 0; $i < strlen($str); $i += 1) {
    if ($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y") {
        echo $str[$i] . "<br />";

    }
    // Affichage en colonne
}
?>