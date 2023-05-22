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
    // Commentaire en ligne
    $str1 = "Hello";
    /*
    Commentaire de bloc
    */
    $str2 = "LaPlateforme";
    # Un autre commentaire en ligne
    $str3 = "!";
    echo $str1 . " " . $str2 . " " . $str3 . "<br>";

    echo $str1 . "<br>"; // Affiche la variable $str1 avec un retour à la ligne
    echo $str2 . "<br>"; /*
Affiche la variable $str2 avec un retour à la ligne
*/
    echo $str3 . "<br>"; # Affiche la variable $str3 avec un retour à la ligne
    ?>



</body>

</html>