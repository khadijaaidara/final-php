<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement exercice 12</title>
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
    <h2>Informations</h2>

    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $code_postal = $_POST["code_postal"];

        // Afficher les données dans un tableau XHTML
        echo "<table border='2'>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code Postal</th>
                </tr>
                <tr>
                    <td>$nom</td>
                    <td>$prenom</td>
                    <td>$adresse</td>
                    <td>$ville</td>
                    <td>$code_postal</td>
                </tr>
            </table>";
    } else {
        
        echo "<p>Aucune donnée à afficher car le formulaire est vide.</p>";
    }
    ?>
</body>
</html>
