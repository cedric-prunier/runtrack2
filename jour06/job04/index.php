<?php

function calcule($nbr1, $char, $nbr2)
{
    if ($char == '+') {
        return $nbr1 + $nbr2;
    } elseif ($char == '-') {
        return $nbr1 - $nbr2;
    } elseif ($char == '*') {
        return $nbr1 * $nbr2;
    } elseif ($char == '/') {
        return $nbr1 / $nbr2;
    } elseif ($char == '%') {
        return $nbr1 % $nbr2;
    }

}
echo calcule(10, '+', 20);
echo '<br>';
echo calcule(10, '-', 20);
echo '<br>';
echo calcule(10, '*', 20);
echo '<br>';
echo calcule(10, '/', 20);
echo '<br>';
echo calcule(10, '%', 20);
?>