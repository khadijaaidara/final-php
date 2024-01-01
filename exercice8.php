<?php
$tableauPersonnes = array(
    "Khadija" => array("John", "Ville1", 25),
    "Ndack" => array("Jane", "Ville2", 30),
    "Assane" => array("Bob", "Ville3", 22)
);

// Affichage du tableau
foreach ($tableauPersonnes as $nom => $details) {
    echo "Nom: $nom, Prénom: $details[0], Ville: $details[1], Âge: $details[2]<br>";
}
?>
