<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body {
            text-align: center;
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        
            padding-top: 3%;
        }

        .container {
            text-align: center;
        }

       
    </style>
    <title>Exercice 3</title>
</head>
<body>
<a href="index.php">acceuille</a>
    <div class="container">
    <br>
   
    
    <?php
        $targetNumber = 152;

        // Boucle while
        $attemptsWhile = 0;
        $randomNumberWhile = 0;
        while ($randomNumberWhile != $targetNumber) {
            $randomNumberWhile = rand(100, 999);
            $attemptsWhile++;
        }

        // Boucle for
        $attemptsFor = 0;
        for ($randomNumberFor = 0; $randomNumberFor != $targetNumber; $randomNumberFor = rand(100, 999)) {
            $attemptsFor++;
        }

        echo "<h1>Exercice 3</h1>";
        echo "<h1>Trouver le nombre choisi avec while et for</h1>";
        echo "<p>Le nombre Initial est : $targetNumber</p>";
        echo "<h2>avec la boucle while : $attemptsWhile</h2>";
        echo "<h2 class='pour'>avec la boucle for : $attemptsFor</h2>";
        echo "<p>actualiser la page </p>";
        ?>
    </div>
</body>
</html>
