<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exercice 12</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;

}

    </style>
</head>
<body>
<a href="index.php">acceuille</a>
   
    <h2>Adresse client</h2>

    <form action="traitement12.php" method="post">
        <fieldset>
            <legend>Informations client</legend>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br>

            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal" required pattern="[0-9]{5}"><br>
        </fieldset>

        <input type="submit" value="Envoyer">
    </form>

</body>
</html>
