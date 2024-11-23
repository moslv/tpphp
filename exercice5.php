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
<form method="post" action=" ">
       <h2> calcul du diamètre,du perimètre,et la surface </h2>
       <br> <br>
       <form action="" method="POST">
        <label for="rayon"> donnez le rayon (en cm) : </label>
        <input type="number" name="rayon" id="rayon"  required>
        <br><br>
        <input type="submit" value="Calculer">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rayon = $_POST['rayon'];
        if ($rayon > 0) {
            $diametre = 2 * $rayon;
            $perimetre = 2 * pi() * $rayon;
            $surface = pi() * $rayon * $rayon;
            echo " <br><p>Diamètre : " . round($diametre, 2) . " cm</p>";
            echo " <br><p>Périmètre : " . round($perimetre, 2) . " cm</p>";
            echo "<br><p> Surface : " . round($surface, 2) . " cm²</p>";
        } else {
            echo "<h5 style='color: red;'>Le rayon doit être un nombre positif.</h5>";
        }
    }
?> 
</body>
</html>