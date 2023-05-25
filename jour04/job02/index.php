<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!empty($_GET)) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];

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

    <form action="index.php" method="GET">
        <input type="text" name="nom" placeholder="Entrez votre nom">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="submit" value="Valider et Envoyer">
    </form>
</body>

</html>