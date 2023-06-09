<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

// Convertir la chaîne en minuscules pour faciliter le traitement
$str = strtolower($str);

// Parcourir la chaîne pour compter les occurrences de consonnes et de voyelles
$length = 0;
while (isset($str[$length])) {
    $char = $str[$length];

    if ($char >= 'a' && $char <= 'z') { // Vérifier si le caractère est une lettre
        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y') {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }

    $length++;
}

// Afficher les résultats dans un tableau HTML
echo "<table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>" . $dic["voyelles"] . "</td>
                <td>" . $dic["consonnes"] . "</td>
            </tr>
        </tbody>
      </table>";
?>