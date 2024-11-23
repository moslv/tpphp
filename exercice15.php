<?php
// Vérifier si le formulaire a été soumis avec un choix
if (isset($_POST['action'])) {
    // Récupérer l'action choisie
    $action = $_POST['action'];

    // Redirection en fonction du choix
    switch ($action) {
        case 'vendre':
            header("Location: vendre.php");
            break;
        case 'acheter':
            header("Location: acheter.php");
            break;
        case 'louer':
            header("Location: louer.php");
            break;
        default:
            echo "Option invalide.";
            break;
    }

    // Terminer l'exécution du script après la redirection
    exit();
} else {
    echo "Aucune action sélectionnée.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Agence Immobilière</title>
    
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

    <h1>Choisissez votre option</h1>

    <!-- Formulaire avec méthode POST -->
    <form method="POST" action="">
        <button type="submit" name="action" value="vendre" href="vendre.php">Vendre</button>
        <button type="submit" name="action" value="acheter">Acheter</button>
        <button type="submit" name="action" value="louer">Louer</button>
    </form>

</body>
</html>
