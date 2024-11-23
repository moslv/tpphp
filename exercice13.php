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
 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombres'])) {
      $nombres = array_map('intval', explode(',', $_POST['nombres']));
      $moyenne = array_sum($nombres) / count($nombres);
      $maximum = max($nombres);
      $minimum = min($nombres);
    }
 ?>
  <h1>Entrez des entiers</h1>
    <form method="POST">
        <label for="nombres">Entrez des entiers séparés par des virgules :</label>
        <input type="text" id="nombres" name="nombres" required>
        <button type="submit">Calculer</button>
    </form>
    <?php if (isset($nombres)): ?>
        <h2>Entiers Saisis :</h2>
        <table>
            <tr>
                <?php foreach ($nombres as $index => $nombre): ?>
                    <th>Entier <?php echo $index + 1; ?></th>
                <?php endforeach ?>
            </tr>
            <tr>
                <?php foreach ($nombres as $nombre):  ?> 
                    <td><?php echo $nombre; ?></td>
                    <?php endforeach ?>
            </tr>
        </table>
      <h2>resultat</h2>
        <p><strong>Moyenne :</strong> <?php echo $moyenne; ?></p>
        <p><strong>Maximum :</strong> <?php echo $maximum; ?></p>
        <p><strong>Minimum :</strong> <?php echo $minimum; ?></p>
    <?php endif?>  
</div>
</body>
</html> 