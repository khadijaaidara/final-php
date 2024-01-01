<?php
function sinusAngle($angle, $unite = 'radian') {
    // Conversion de l'angle selon l'unité spécifiée
    switch (strtolower($unite)) {
        case 'radian':
            $angleEnRadians = $angle;
            break;
        case 'degre':
            $angleEnRadians = deg2rad($angle);
            break;
        case 'grade':
            $angleEnRadians = ($angle * M_PI) / 200; // Conversion des grades en radians
            break;
        default:
            echo 'Unité non reconnue.';
            return;
    }

    // Calcul du sinus
    $sinus = sin($angleEnRadians);

    // Affichage avec style CSS et animation au survol
    echo '<div class="resultat">';
    echo '<p style="font-weight: bold; color: #007bff;">Résultat du calcul du sinus</p>';
    echo '<p>Angle: ' . $angle . ' ' . $unite . '</p>';
    echo '<p>Sinus: ' . $sinus . '</p>';
    echo '</div>';
}

// Exemples d'utilisation
$angleEnRadians = 1.5;
$angleEnDegres = 90;
$angleEnGrades = 100;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 16</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            
        }

    </style>
</head>
<body>
<a href="index.php">acceuille</a>
    <br>
      
    <h2>Affiche le sinus d'un angle donné en radian, en degré ou en grade.</h2>
    <?php
    // Calcul du sinus en radians (valeur par défaut)
    sinusAngle($angleEnRadians);

    // Calcul du sinus en degrés
    sinusAngle($angleEnDegres, 'degre');

    // Calcul du sinus en grades
    sinusAngle($angleEnGrades, 'grade');
    ?>
</body>
</html>
