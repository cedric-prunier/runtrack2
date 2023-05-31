SELECT e.nom AS nom_etage
FROM etages e
JOIN salles s ON e.id = s.id_etage
WHERE s.capacite = (SELECT MAX(capacite) FROM salles);
