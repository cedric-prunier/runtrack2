<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (!empty($_POST)) {
    $numArguments = 0;
    foreach ($_POST as $name => $value) {
        $numArguments++;
    }
    echo "Le nombre d’arguments POST envoyé est :" . $numArguments;
}
?>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="submit" value="Valider et Envoyer">
    </form>

</body>

</html>