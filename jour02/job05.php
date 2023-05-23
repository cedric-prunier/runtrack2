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
    $isPrime = true;

    for ($number = 2; $number <= 1000; $number++) {
        $isPrime = true;

        for ($divisor = 2; $divisor <= sqrt($number); $divisor++) {
            if ($number % $divisor == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo $number . "<br />";
        }
    }
    ?>


</body>

</html>