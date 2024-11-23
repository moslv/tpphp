<?php      
function transformerTableau(&$tableau) {
    foreach ($tableau as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }
}
$tableau = ["bonjour", "jE DoiS", "etre COAch", "En", "DeveLOPpement Personnel"];


$tableauOriginal = $tableau;

transformerTableau($tableau);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation des chaînes</title>
    <style>
        table {
            width: 45%;
            border-collapse: collapse;
            margin: 20px 10px;
            float: left;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            font-size: 36px;
            color: #333;
        }
    </style>
</head>
<body>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9; /* Gris clair pour un léger contraste */
    }
    header {
        background-color: #007bff; /* Bleu vif */
        color: white;
        padding: 20px 0;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
    }
    .container {
        background: #ffffff; /* Blanc pour le contenu */
        margin: 20px auto;
        padding: 20px 30px;
        max-width: 800px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #007bff; /* Bleu vif pour les titres */
        font-size: 22px;
        margin-bottom: 10px;
        text-align: center;
    }
    p {
        color: #333333; /* Gris foncé pour le texte */
        font-size: 16px;
        line-height: 1.5;
        text-align: center;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin: 10px 0;
        font-size: 16px;
    }
    a {
        text-decoration: none;
        color: #007bff; /* Bleu vif pour les liens */
        font-weight: bold;
    }
    a:hover {
        color: #0056b3; /* Bleu légèrement plus foncé au survol */
    }
</style>
    
<div class="container">
<h2>Tableaux Avant et Après Transformation</h2>
<h3>Avant Transformation</h3>
<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($tableauOriginal as $index => $chaine) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>$chaine</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<h3>Après Transformation</h3>
<table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($tableau as $index => $chaine) {
            echo "<tr>";
            echo "<td>$index</td>";
            echo "<td>$chaine</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<div>
</body>
</html>