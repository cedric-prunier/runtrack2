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
    $nombre = $_GET['nombre'];
    if ($nombre % 2 == 0) {
        echo "Nombre pair";
    } else {
        echo "Nombre impair";
    }
}

?>

<body>
    <form action="index.php" method="GET">
        <input type="text" name="nombre">
        <input type="submit">
    </form>
</body>

</html>