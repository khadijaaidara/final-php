<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du Calcul TVA</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

    </style>
</head>
<body>
<a href="index.php">acceuille</a>
    <h2>Résultat du Calcul TVA</h2>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $prixHT = isset($_POST['prixHT']) ? floatval($_POST['prixHT']) : 0;
        $tauxTVA = isset($_POST['tauxTVA']) ? floatval($_POST['tauxTVA']) : 0;

        // Calculer le montant de la TVA et le prix TTC
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    ?>
    <form>
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" readonly>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA . '%'; ?>" readonly>

        <label for="montantTVA">Montant TVA :</label>
        <input type="text" id="montantTVA" name="montantTVA" value="<?php echo $montantTVA; ?>" readonly>

        <label for="prixTTC">Prix TTC :</label>
        <input type="text" id="prixTTC" name="prixTTC" value="<?php echo $prixTTC; ?>" readonly>
    </form>
    <?php
    } else {
        // Afficher un message si le formulaire n'a pas été soumis
        echo "<p>Aucune donnée à afficher.</p>";
    }
    ?>
     </body>
</html>
