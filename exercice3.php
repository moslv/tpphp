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

<div class="container">
   <form method="post" action=" ">
       <h2> choisir 3 nombres et effectuez le nombre de tirage necessaire pour l'avoir  </h2>
       <br> 
       <label for="number"> <h3> entrez un nombre de 3 chiffre  </h3> </label>
       <input type="number" name="number" id="number" min="100" max="999"required>
       <br> <br> 
       <p> <input type="submit" value=" lancer le tirage"> 
   </form>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombrechoisis = intval($_POST['number']); 
        $cpt = 0; 
        $tirage= 0; 
        while ($tirage != $nombrechoisis) {
            $tirage= rand(100, 999); 
            $cpt++; 
        }

        echo "<p>Le nombre choisi était <strong>$nombrechoisis  </strong>.</p>";
        echo "<p>Il a fallu <strong> $cpt </strong> tirages pour obtenir ce nombre.</p>";
    }
    ?> 
    
</body>
</html>