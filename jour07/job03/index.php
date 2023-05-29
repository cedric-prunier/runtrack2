<?php
session_start(); // Démarrer la session

if (isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];

    // Vérifier si la variable de session existe et est un tableau
    if (isset($_SESSION['prenoms']) && is_array($_SESSION['prenoms'])) {
        // Ajouter le prénom à la liste des prénoms dans la variable de session
        $_SESSION['prenoms'][] = $prenom;
    } else {
        // Si la variable de session n'existe pas ou n'est pas un tableau, créer un nouveau tableau avec le prénom
        $_SESSION['prenoms'] = array($prenom);
    }
}


// Vérifier si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    // Réinitialiser la liste des prénoms en supprimant la variable de session
    unset($_SESSION['prenoms']);
}

// Afficher l'ensemble des prénoms
if (isset($_SESSION['prenoms']) && is_array($_SESSION['prenoms'])) {
    echo "Liste des prénoms : <br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="submit" value="Ajouter">
    </form>

    <form action="" method="POST">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>