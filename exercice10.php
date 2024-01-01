<?php
// Exercice 8 - Tableau multidimensionnel associatif indicé
$tableau_exercice_8 = array(
    "Khadija" => array("prénom" => "Khadija", "ville" => "Paris", "âge" => 25),
    "Ndack" => array("prénom" => "Ndack", "ville" => "New York", "âge" => 30),
    "Assane" => array("prénom" => "Assane", "ville" => "London", "âge" => 22)
);

// Exercice 9 - Tableau multidimensionnel associatif associatif
$tableau_exercice_9 = array(
    "Khadija" => array("prénom" => "Khadija", "ville" => "Paris", "âge" => 25),
    "Ndack" => array("prénom" => "Ndack", "ville" => "New York", "âge" => 30),
    "Assane" => array("prénom" => "Assane", "ville" => "London", "âge" => 22)
);

// Exercice 10 - Utiliser une boucle foreach pour lire le tableau de l'exercice 8
echo "Exercice 10 - Foreach pour le tableau de l'exercice 8:\n";
foreach ($tableau_exercice_8 as $nom => $infos_8) {
    echo "Nom: $nom, Prénom: {$infos_8['prénom']}, Ville: {$infos_8['ville']}, Âge: {$infos_8['âge']}\n";
}

// Exercice 10 - Utiliser une boucle foreach pour lire le tableau de l'exercice 9
echo "\nExercice 10 - Foreach pour le tableau de l'exercice 9:\n";
foreach ($tableau_exercice_9 as $nom_9 => $infos_9) {
    echo "Nom: $nom_9, Prénom: {$infos_9['prénom']}, Ville: {$infos_9['ville']}, Âge: {$infos_9['âge']}\n";
}
?>
