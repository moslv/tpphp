<?php
// Définition du tableau multidimensionnel associatif
$personnes = [
    "Dupont" => [
        "prenom" => "Pierre",
        "ville" => "Paris",
        "age" => 30
    ],
    "Durand" => [
        "prenom" => "Marie",
        "ville" => "Lyon",
        "age" => 25
    ],
    "Lemoine" => [
        "prenom" => "Lucie",
        "ville" => "Marseille",
        "age" => 28
    ]
];

// Affichage en HTML
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prénom</th><th>Ville</th><th>Âge</th></tr>";

foreach ($personnes as $nom => $infos) {
    echo "<tr>";
    echo "<td>" . $nom . "</td>";
    echo "<td>" . $infos['prenom'] . "</td>";
    echo "<td>" . $infos['ville'] . "</td>";
    echo "<td>" . $infos['age'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e0f7fa; /* Bleu très clair */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        background: #ffffff; /* Blanc pur */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px 30px;
        max-width: 400px;
        text-align: center;
    }
    h1 {
        color: #0077b6; /* Bleu intense */
        font-size: 24px;
        margin-bottom: 20px;
    }
    input[type="text"] {
        width: 80%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #0077b6; /* Bord bleu intense */
        border-radius: 4px;
        background-color: #f0faff; /* Bleu très pâle */
    }
    button {
        background-color: #0077b6; /* Bleu intense */
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    button:hover {
        background-color: #005f8c; /* Bleu légèrement plus foncé */
    }
</style>
</body>
</html>
