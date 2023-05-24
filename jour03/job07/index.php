<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Vérifier si la variable $str existe
if (isset($str)) {
    $length = 0;

    // Calculer la longueur de la chaîne de caractères en parcourant les caractères un par un
    while (isset($str[$length])) {
        $length++;
    }

    // Vérifier si la chaîne de caractères n'est pas vide
    if ($length > 0) {
        $first_char = $str[0];

        // Parcourir la chaîne de caractères à partir du deuxième caractère
        for ($i = 1; $i < $length; $i++) {
            // Remplacer chaque caractère par le caractère suivant
            $str[$i - 1] = $str[$i];
        }

        // Remplacer le dernier caractère par le premier caractère
        $str[$length - 1] = $first_char;

        // Afficher la chaîne de caractères modifiée
        echo $str;
    } else {
        echo "La chaîne de caractères est vide.";
    }
} else {
    echo "La variable \$str n'existe pas.";
}
?>