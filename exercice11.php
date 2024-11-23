<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul des jours restants jusqu'à la fin de l'année</title>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f1f9fc; /* Gris clair bleuté pour un fond apaisant */
    }
    header {
        background-color: #007bff; /* Bleu vif */
        color: white;
        padding: 25px 0;
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        letter-spacing: 1px;
    }
    .container {
        background: #ffffff; /* Blanc pour le contenu */
        margin: 30px auto;
        padding: 25px 40px;
        max-width: 600px;
        border-radius: 8px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        text-align: center;
    }
    h2 {
        color: #007bff; /* Bleu vif pour les sous-titres */
        font-size: 22px;
        margin-bottom: 20px;
    }
    input[type="text"] {
        width: 70%;
        padding: 12px;
        margin: 10px 0;
        border: 2px solid #007bff; /* Bord bleu vif */
        border-radius: 4px;
        background-color: #f1f9fc; /* Bleu clair pour le fond de champ */
        font-size: 16px;
    }
    button {
        background-color: #007bff; /* Bleu vif */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    button:hover {
        background-color: #0056b3; /* Bleu plus foncé au survol */
    }
    .result {
        margin-top: 20px;
        font-size: 18px;
        color: #333333;
        font-weight: bold;
    }
</style>

<h2>Calcul des jours restants jusqu'à la fin de l'année</h2>

<form method="post">
    <label for="date">Entrez une date (AAAA-MM-JJ) :</label>
    <input type="date" id="date" name="date" required>
    <input type="submit" value="Calculer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la date saisie par l'utilisateur
    $userDate = $_POST['date'];

    // Convertir la date saisie en timestamp
    $userTimestamp = strtotime($userDate);

    // Vérifier que la date est valide
    if ($userTimestamp === false) {
        echo "<p>La date saisie n'est pas valide.</p>";
    } else {
        // Obtenir la date du 31 décembre de la même année
        $endYear = date("Y", $userTimestamp);
        $endDate = strtotime("31 December $endYear");

        // Calculer le nombre de jours restants
        $daysLeft = ceil(($endDate - $userTimestamp) / (60 * 60 * 24));

        // Afficher le résultat
        if ($daysLeft >= 0) {
            echo "<p>Il reste $daysLeft jours jusqu'à la fin de l'année $endYear.</p>";
        } else {
            echo "<p>La date saisie est déjà passée cette année.</p>";
        }
    }
}
?>

</body>
</html>
