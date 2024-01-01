<?php
function afficherTableauXHTML($tableau) {
    echo "<table border='1'>";
    echo "<tr>";
    foreach (array_keys($tableau[0]) as $cle) {
        echo "<th>$cle</th>";
    }
    echo "</tr>";

    foreach ($tableau as $ligne) {
        echo "<tr>";
        foreach ($ligne as $valeur) {
            echo "<td>$valeur</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

// Exemple d'utilisation
$donnees = array(
    array("Nom" => "Alice", "Âge" => 25, "Ville" => "Paris"),
    array("Nom" => "Bob", "Âge" => 30, "Ville" => "Lyon"),
    array("Nom" => "Charlie", "Âge" => 22, "Ville" => "Marseille")
);

afficherTableauXHTML($donnees);
?>
