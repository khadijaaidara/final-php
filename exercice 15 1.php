<?php
function transformStrings(&$stringsArray) {
    foreach ($stringsArray as &$str) {
        $str = ucfirst(strtolower($str));
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les chaînes de caractères saisies par l'utilisateur
    $inputStrings = $_POST["inputStrings"];

    // Diviser la chaîne en un tableau en utilisant la virgule comme séparateur
    $stringsArray = explode(",", $inputStrings);

    // Appeler la fonction pour transformer les chaînes
    transformStrings($stringsArray);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Traitement xercice 15 PHP</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 3%;

}



    </style>
</head>
<body>

    <div class="container">
        <h2>Résultat</h2>
        <?php
        // Afficher le résultat transformé
        if (isset($stringsArray)) {
            echo "<p>Résultat transformé :</p>";
            echo "<ul>";
            foreach ($stringsArray as $str) {
                echo "<li>$str</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
