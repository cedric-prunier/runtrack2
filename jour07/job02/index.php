<?php

$cookie_name = "nbvisites";

// Vérifier si le cookie existe
if (!isset($_COOKIE[$cookie_name])) {
    // Si le cookie n'existe pas, initialiser le compteur à 1
    $visites = 1;
} else {
    // Si le cookie existe, récupérer sa valeur et l'incrémenter de 1
    $visites = $_COOKIE[$cookie_name] + 1;
}

// Définir le cookie avec la nouvelle valeur et rendre immédiatement disponible
setcookie($cookie_name, $visites, time() + (86400 * 30), "/", "", false, true);

// Afficher le contenu du cookie
echo "Nombre de visites : " . $visites;

// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser le compteur à 0 en supprimant le cookie
    setcookie($cookie_name, "", time() - 3600, "/", "", false, true);
    $visites = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>