<head>
    <link rel="stylesheet" href="styles.css">
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
       <h2> verification du palindrome </h2>
       <br> 
       <label for="mot"> <h3> entrez un mot:  </h3> </label>
       <input type="text" name="mot" id="mot">
    <br> <br> 
     <p> <input type="submit" value=" envoyer"> </p>

  <?php
    
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mot = $_POST["mot"];
        $longueur = strlen($mot); 
        $estPalindrome = true;  
        for ($i = 0; $i < $longueur / 2; $i++) {
            if ($mot[$i] != $mot[$longueur - $i - 1]) {
                $estPalindrome = false; 
                break;  
            }
        }
    
        if ($estPalindrome) {
            echo "<p class='moi1'>Le mot '$mot' est un palindrome.</p>";
        } else {
            echo "<p class='moi'>Le mot '$mot' n'est pas un palindrome.</p>";
        }
      }
  ?> 