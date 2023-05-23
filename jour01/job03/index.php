<?php
$booleanVar = true;
$integerVar = 42;
$stringVar = "Hello, world!";
$floatVar = 3.14;

// Tableau d'informations
$table = '<table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>' . gettype($booleanVar) . '</td>
                    <td>booleanVar</td>
                    <td>' . $booleanVar . '</td>
                </tr>
                <tr>
                    <td>' . gettype($integerVar) . '</td>
                    <td>integerVar</td>
                    <td>' . $integerVar . '</td>
                </tr>
                <tr>
                    <td>' . gettype($stringVar) . '</td>
                    <td>stringVar</td>
                    <td>' . $stringVar . '</td>
                </tr>
                <tr>
                    <td>' . gettype($floatVar) . '</td>
                    <td>floatVar</td>
                    <td>' . $floatVar . '</td>
                </tr>
            </tbody>
        </table>';

echo $table;
?>