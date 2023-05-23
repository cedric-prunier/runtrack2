<?php
$str = "Dans l'espace, personne ne vous entend crier";
$compte = 0;
for ($i = 0; $i < strlen($str); $i++) {
    $compte++;

}
echo "Le nombre de caractères est de " . $compte . ".";
?>