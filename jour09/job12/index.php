<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=jour09", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT nom,prenom, naissance FROM etudiants WHERE naissance >= '1998-01-01' AND naissance <= '2018-12-31'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($result)) {
        echo '<table style="border-collapse: collapse; border: 1px solid black;">'; // Ajout des styles de bordure inline

        echo "<thead>";
        echo "<tr>";
        foreach ($result[0] as $key => $value) {
            echo "<th style='border: 1px solid black; padding: 8px;'>$key</th>"; // Ajout des styles de bordure et de rembourrage pour les cellules d'en-tête
        }
        echo "</tr>";
        echo "</thead>";

        echo "<tbody>";
        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td style='border: 1px solid black; padding: 8px;'>$value</td>"; // Ajout des styles de bordure et de rembourrage pour les cellules de données
            }
            echo "</tr>";
        }
        echo "</tbody>";

        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>