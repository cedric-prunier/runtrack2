<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>

<body>
    <?php
    // Vérifier si le prénom existe dans le cookie
    if (isset($_COOKIE['prenom'])) {
        $prenom = $_COOKIE['prenom'];
        echo "Bonjour $prenom !";

        // Bouton de déconnexion
        echo '<form action="" method="POST">
            <input type="submit" name="deco" value="Déconnexion">
        </form>';

        // Traitement de la déconnexion
        if (isset($_POST['deco'])) {
            setcookie('prenom', '', time() - 3600, '/');
            header('Location: index.php'); // Redirection vers la page d'accueil après déconnexion
        }
    } else {
        // Traitement de la connexion
        if (isset($_POST['connexion'])) {
            $prenom = $_POST['prenom'];

            // Enregistrer le prénom dans le cookie
            setcookie('prenom', $prenom, time() + (86400 * 30), '/');

            // Redirection vers la page d'accueil après connexion
            header('Location: index.php');
        } else {
            // Formulaire de connexion
            echo '<form action="" method="POST">
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="submit" name="connexion" value="Connexion">
            </form>';
        }
    }
    ?>
</body>

</html>