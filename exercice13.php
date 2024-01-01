<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA et Prix TTC</title>
</head>
<body>

    <form action="traitement_tva.php" method="post">
        <label for="prix_ht">Prix HT :</label>
        <input type="text" name="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? htmlspecialchars($_POST['prix_ht']) : ''; ?>" required><br>

        <label for="taux_tva">Taux de TVA :</label>
        <input type="text" name="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? htmlspecialchars($_POST['taux_tva']) : ''; ?>" required><br>

        <input type="submit" value="Calculer">
    </form>

</body>
</html>
<!-- traitement_tva.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA et Prix TTC - Traitement</title>
</head>
<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prix_ht = floatval($_POST['prix_ht']);
        $taux_tva = floatval($_POST['taux_tva']);

        $montant_tva = $prix_ht * ($taux_tva / 100);
        $prix_ttc = $prix_ht + $montant_tva;

        echo "<p>Montant TVA : $montant_tva</p>";
        echo "<p>Prix TTC : $prix_ttc</p>";
    }
    ?>

</body>
</html>
