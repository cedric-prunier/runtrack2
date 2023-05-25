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
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    echo '<table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nom</td>
                    <td>' . $nom . '</td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td>' . $prenom . '</td>
                </tr>
            </tbody>
        </table>';

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