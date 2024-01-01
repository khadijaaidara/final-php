<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 5%;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }


    </style>
    <title>EXERCICE </title>
</head>
<body>
<a href="index.php">acceuille</a>
        <br>
      


    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];

            if ($nombre % 3 == 0 && $nombre % 5 == 0) {
                echo "<p class='vrai'>Le nombre $nombre est un multiple de 3 et de 5.</p>";
            } else {
                echo "<p class='faux'>Le nombre $nombre n'est pas un multiple de 3 et de 5.</p>";
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nombre">Entrez un nombre :</label>
            <input type="number" name="nombre" required>
            <button type="submit">Vérifier</button>
        </form>
    </div>
</body>
</html>
