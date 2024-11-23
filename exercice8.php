<?php
// Initialisation des variables
$moyenne = $maximum = $minimum = null;
$tab = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $tab = array_map('intval', explode(",", $_POST['nombres'])); // Conversion des entrées en tableau d'entiers
    
    if (!empty($tab)) {
        // Calculer la moyenne, le maximum et le minimum
        $moyenne = array_sum($tab) / count($tab);
        $maximum = max($tab);
        $minimum = min($tab);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de Moyenne, Maximum et Minimum</title>
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
    <h1>Calculer la Moyenne, Maximum et Minimum</h1>

    <!-- Formulaire pour saisir le tableau d'entiers -->
    <form method="post">
        <label for="nombres">Entrez les nombres séparés par des virgules :</label>
        <input type="text" name="nombres" id="nombres" required placeholder="Ex: 10,20,30,40">
        <button type="submit">Calculer</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($tab)): ?>
        <h2>Résultats</h2>
        <p><strong>Moyenne :</strong> <?= $moyenne ?></p>
        <p><strong>Maximum :</strong> <?= $maximum ?></p>
        <p><strong>Minimum :</strong> <?= $minimum ?></p>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Aucun nombre valide n'a été saisi.</p>
    <?php endif; ?>
</body>
</html>
