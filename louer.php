<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louer un Bien</title>
    <style>
        /* Style général de la page */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Conteneur principal du formulaire */
        .form-container {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: blue;
        }

        /* Style des labels et inputs */
        label {
            font-size: 1.1em;
            margin-bottom: 10px;
            color: blue;
            display: block;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }

        /* Style du textarea (description du bien) */
        textarea {
            resize: vertical;
            height: 120px;
        }

        /* Style du bouton de soumission */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: blue;
        }

        /* Petite bordure entre les éléments */
        .form-container hr {
            border: 0;
            border-top: 1px solid #eee;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Formulaire pour louer un bien immobilier</h1>
        <hr>
        <form action="louer_traitement.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required placeholder="Votre nom complet">

            <label for="date">Date de début de location :</label>
            <input type="date" id="date" name="date" required>

            <label for="duree">Durée de location :</label>
            <input type="text" id="duree" name="duree" required placeholder="Durée de location (ex: 1 an)">

            <button type="submit">Soumettre</button>
        </form>
    </div>

</body>
</html>
