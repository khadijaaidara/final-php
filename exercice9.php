<?php
$tableauPersonnesAssoc = array(
    "Khadija" => array("prenom" => "John", "ville" => "Ville1", "age" => 25),
    "Ndack" => array("prenom" => "Jane", "ville" => "Ville2", "age" => 30),
    "Assane" => array("prenom" => "Bob", "ville" => "Ville3", "age" => 22)
);

// Affichage du tableau
foreach ($tableauPersonnesAssoc as $nom => $details) {
    echo "Nom: $nom, Prénom: $details[prenom], Ville: $details[ville], Âge: $details[age]<br>";
}
?>
