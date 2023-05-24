<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$strLength = 0;
while (isset($str[$strLength])) {
    if (in_array($str[$strLength], $voyelles)) {
        echo $str[$strLength];
    }
    $strLength++;
}
?>