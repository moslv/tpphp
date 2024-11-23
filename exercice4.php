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
<h2>Calcul du PPCM </h2>
    <form method="POST">
       Entrez le  Nombre 1: <input type="number" name="nombre1" required><br><br>
       Entrez le  Nombre 2: <input type="number" name="nombre2" required><br><br>
        <input type="submit" value="Calculer le PPCM">
    </form>

    <?php
    if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        if ($nombre1 <= 0 || $nombre2 <= 0) {
            echo "<p style='color:red;'>Les deux nombres doivent être supérieurs à zéro.</p>";
        } else {
            if ($nombre1 > $nombre2) {
                $ppcm = $nombre1;
            } else {
                $ppcm = $nombre2;
            }
            while (($ppcm % $nombre1 != 0) || ($ppcm % $nombre2 != 0)) {
                $ppcm++;
            }
            echo "<p>Le PPCM de $nombre1 et $nombre2 est : $ppcm</p>";
        }
    }
    ?> 
    
</body>
</html>