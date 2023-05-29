<?php
function leetSpeak($str)
{
    $leetChars = array(
        'a' => '4',
        'A' => '4',
        'e' => '3',
        'E' => '3',
        'g' => '6',
        'G' => '6',
        'i' => '1',
        'I' => '1',
        'o' => '0',
        'O' => '0',
        's' => '5',
        'S' => '5',
        't' => '7',
        'T' => '7'
    );

    $convertedStr = '';

    for ($i = 0; isset($str[$i]); $i++) {
        $char = $str[$i];

        if (isset($leetChars[$char])) {
            $convertedStr .= $leetChars[$char];
        } else {
            $convertedStr .= $char;
        }
    }

    return $convertedStr;
}
echo leetSpeak('Bonjour a tous ! comment Allez-vous ?')
    ?>