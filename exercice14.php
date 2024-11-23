<?php
$prixHT = $tauxTVA = $montantTVA = $prixTTC = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prixHT = $_POST['prixHT'];
    $tauxTVA = $_POST['tauxTVA'];
    $montantTVA = $prixHT * ($tauxTVA / 100);
    $prixTTC = $prixHT + $montantTVA;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA et Prix TTC</title>
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
<div class="container">
<h1>Calcul du Montant de la TVA et du Prix TTC</h1>

<form action="" method="POST">
    <label for="prixHT">Prix HT (cfa) :</label>
    <input type="number" step="0.01" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" required><br><br>

    <label for="tauxTVA">Taux de TVA (%) :</label>
    <input type="number" step="0.01" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required><br><br>

    <input type="submit" value="Calculer">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h2>Résultats du Calcul :</h2>
    
    <p><strong>Montant de la TVA :</strong> <?php echo number_format($montantTVA, 2); ?> cfa</p>
    
    <p><strong>Prix TTC :</strong> <?php echo number_format($prixTTC, 2); ?> cfa</p>
<?php endif; ?>
</div >
</body>
</html>