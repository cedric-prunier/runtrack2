<?php


function occurences($str, $char)
{
    $count = 0;
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] === $char) {
            $count++;
        }
        $i++;
    }
    return $count;

}
echo occurences('Hello LaPlateforme', 'a')
    ?>