<?php
session_start(); // Démarre la session

if (isset($_POST['reset'])) {
    unset($_SESSION['nbvisites']); // Réinitialise la variable de session
}

if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++; // Incrémente la variable de session
} else {
    $_SESSION['nbvisites'] = 1; // Initialise la variable de session à 1
}

echo "Nombre de visites : " . $_SESSION['nbvisites']; // Affiche le nombre de visites

?>

<form action="" method="POST">
    <input type="submit" name="reset" value="Reset">
</form>