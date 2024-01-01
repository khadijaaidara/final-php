<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin-top: 5%;
            text-align: center;
        
        }

      
     
    </style>
    <title>Exercice 4</title>
</head>
<body>
<a href="index.php">acceuille</a>

<h1>Exercice 4</h1>
<h1>PPCM et le PGCD</h1>
    <div class="container">
        <?php
        function calculerPGCD($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function calculerPPCM($a, $b) {
            if ($a == 0 || $b == 0) {
                return 0;
            } else {
                return abs($a * $b) / calculerPGCD($a, $b);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre1']) && isset($_POST['nombre2'])) {
            $nombre1 = (int)$_POST['nombre1'];
            $nombre2 = (int)$_POST['nombre2'];

            $pgcd = calculerPGCD($nombre1, $nombre2);
            $ppcm = calculerPPCM($nombre1, $nombre2);

            echo "<p class='p1'>Le PPCM de $nombre1 et $nombre2 est : $ppcm</p>";
            echo "<p class='p2'>Le PGCD de $nombre1 et $nombre2 est : $pgcd</p>";
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre1">Entrez un nombre :</label>
            <input type="number" name="nombre1" required>

            <label for="nombre2">Entrez aussi un nombre :</label>
            <input type="number" name="nombre2" required>

            <button type="submit">Calculer</button>
        </form>
    </div>
</body>
</html>
