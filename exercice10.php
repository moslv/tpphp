<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de voyelles et consonnes</title>
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
    <h1>Compteur de voyelles et consonnes</h1>
    <form method="POST">
        <label for="chaine">Entrez une chaîne de caractères :</label>
        <input type="text" name="chaine" id="chaine" required>
        <input type="submit" value="Soumettre">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la chaîne saisie par l'utilisateur
        $chaine = $_POST["chaine"];

        // Initialiser les compteurs
        $voyelles = 0;
        $consonnes = 0;

        // Convertir la chaîne en minuscules pour simplifier la comparaison
        $chaine = strtolower($chaine);

        // Définir un tableau des voyelles
        $voyellesListe = array('a', 'e', 'i', 'o', 'u', 'y');

        // Parcourir chaque caractère de la chaîne
        for ($i = 0; $i < strlen($chaine); $i++) {
            $char = $chaine[$i];

            // Vérifier si le caractère est une lettre
            if (ctype_alpha($char)) {
                // Vérifier si le caractère est une voyelle
                if (in_array($char, $voyellesListe)) {
                    $voyelles++;
                } else {
                    // Si ce n'est pas une voyelle, c'est une consonne
                    $consonnes++;
                }
            }
        }

        // Afficher les résultats
        echo "<p>Il y a <strong>$voyelles</strong> voyelles et <strong>$consonnes</strong> consonnes dans la chaîne.</p>";
    }
    ?>
</body>
</html>
