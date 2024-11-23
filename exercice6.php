Exo6
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un Nombre</title>
   
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

    <h1>Calcul des Diviseurs</h1>

    <!-- Formulaire pour saisir un nombre -->
    <div class="form-container">
        <form method="POST">
            <input type="number" name="number" placeholder="Entrez un nombre" required>
            <input type="submit" value="Afficher les diviseurs">
        </form>
    </div>

    <!-- Traitement PHP pour afficher les diviseurs -->
    <div class="result">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Récupérer le nombre saisi
                $number = $_POST['number'];

                // Vérifier que le nombre est positif
                if ($number > 0) {
                    echo "<h2>Les diviseurs de $number sont :</h2>";
                    echo "<ul>";
                    // Trouver les diviseurs du nombre
                    for ($i = 1; $i <= $number; $i++) {
                        if ($number % $i == 0) {
                            echo "<li>$i</li>";
                        }
                    }
                    echo "</ul>";
                } else {
                    echo "<p style='color: red;'>Veuillez entrer un nombre positif.</p>";
                }
            }
        ?>
    </div>

</body>
</html>

