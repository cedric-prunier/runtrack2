<!DOCTYPE html>
<html>

<head>
    <title>Formulaire avec styles</title>
    <link id="style" rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <h1>Formulaire avec styles</h1>

    <form action="" method="post">
        <label for="style">Style :</label>
        <select name="style" id="style-select">
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
        </select>
        <br><br>
        <input type="submit" id="submit" value="Appliquer le style">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['style'])) {
            $selectedStyle = $_POST['style'];
            echo "<script>document.getElementById('style').setAttribute('href', '$selectedStyle');</script>";
        }
    }
    ?>
</body>

</html>