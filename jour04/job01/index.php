<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php
if (!empty($_GET)) {
    $numArguments = 0;
    foreach ($_GET as $name => $value) {
        $numArguments++;
    }
    echo "Le nombre d’arguments GET envoyé est :" . $numArguments;
}
?>


<body>
    <form action="index.php" method="GET">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="text" name="prénom" placeholder="Entrez votre prénom">
        <input type="submit" value="Valider et Envoyer">
    </form>
</body>

</html>