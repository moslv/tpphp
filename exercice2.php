<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 2</title>
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
       <h2> Test pour verifier si un nombre est multiple de 3 et 5 </h2>
       <br> 
       <label for="number"> <h3> entrez un nombre:  </h3> </label>
       <input type="number" name="number" id="number" required>
       <br> <br> 
       <p> <input type="submit" value=" verification"> 
   </form>

   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST['number']);
            if ($number % 3 == 0 && $number % 5 == 0) {
                echo "<p class='elle'>$number est  un multiple de 3 et de 5.</p>";
            } else {
                echo "<pstyle='color: red;'>$number n'est pas  un multiple de 3 et de 5.</p>";
            }
        } 
 ?> 
</body>
</html>