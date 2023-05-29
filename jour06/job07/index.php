<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="str">
        <label for="fonction">Choisir une fonction</label>
        <select name="fonction" id="fonction">
            <option value="gras">gras</option>
            <option value="cesar">cesar</option>
            <option value="plateforme">plateforme</option>
        </select>
        <input type="submit" value="valider">

    </form>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    if ($fonction === 'gras') {
        $str = gras($str);
    } elseif ($fonction === 'cesar') {
        $str = cesar($str);
    } elseif ($fonction === 'plateforme') {
        $str = plateforme($str);
    }

    // Afficher la chaîne de caractères transformée
    echo $str;
}

function gras($str)
{
    $resultat = "";
    $mot = "";
    $i = 0;
    $longueur = isset($str[$i]) ? 1 : 0;

    while (isset($str[$i])) {
        $caractere = $str[$i];

        if ($caractere === ' ') {
            if (isset($mot[0]) && $mot[0] >= 'A' && $mot[0] <= 'Z') {
                $resultat .= "<strong>" . $mot . "</strong> ";
            } else {
                $resultat .= $mot . " ";
            }
            $mot = "";
        } else {
            $mot .= $caractere;
        }

        $i++;
        $longueur++;
    }

    // Vérification du dernier mot
    if (isset($mot[0]) && $mot[0] >= 'A' && $mot[0] <= 'Z') {
        $resultat .= "<strong>" . $mot . "</strong>";
    } else {
        $resultat .= $mot;
    }

    echo $resultat;
}



function cesar($str, $decalage = 2)
{
    $resultat = "";
    $i = 0;

    while (isset($str[$i])) {
        $caractere = $str[$i];
        $caractere_decale = chr(ord($caractere) + $decalage);
        $resultat .= $caractere_decale;
        $i++;
    }

    echo $resultat;
}
function plateforme($str)
{
    $resultat = "";
    $mot = "";
    $i = 0;
    $longueur = isset($str[$i]) ? 1 : 0;

    while (isset($str[$i])) {
        $caractere = $str[$i];

        if ($caractere === ' ') {
            if (isset($mot[0]) && substr($mot, -2) === "me") {
                $mot .= "_";
            }
            $resultat .= $mot . " ";
            $mot = "";
        } else {
            $mot .= $caractere;
        }

        $i++;
        $longueur++;
    }

    // Vérification du dernier mot
    if (isset($mot[0]) && substr($mot, -2) === "me") {
        $mot .= "_";
    }
    $resultat .= $mot;

    echo $resultat;
}





?>

</html>