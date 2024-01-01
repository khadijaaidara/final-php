<!DOCTYPE html>
<html>
<head>
    <title>exercice 7</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        text-align: center;
    }

    </style>
</head>
<body>

<a href="index.php">Acceuille</a>
    <br>
       
    <h1>Teste si un nombre  est parfait ou non</h1>
    

<form method="post" action="">
    <label for="nombre"> <h3> Entrez un nombre en bas :</h3></label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Tester le nombre parfait">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le nombre saisi au clavier
    $nombre = $_POST["nombre"];

    
    if (is_numeric($nombre) && $nombre > 0 && is_int($nombre + 0)) {
        // Calculer la somme des diviseurs propres
        $sommeDiviseurs = 0;
        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i == 0) {
                $sommeDiviseurs += $i;
            }
        }

        // Tester si le nombre est parfait
        if ($sommeDiviseurs == $nombre) {
            echo " <h2> $nombre est parfait.</h2>";
        } else {
            echo " <h2> $nombre n'est pas parfait.</h2>";
        }
    } else {
        echo " <h2> Veuillez saisir un nombre entier positif. </h2>";
    }
}
?>

</body>
</html>
