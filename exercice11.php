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

// Exercice 11 - Utiliser une boucle while pour lire le tableau de l'exercice 8
echo "\nExercice 11 - While pour le tableau de l'exercice 8:\n";
$keys_exercice_8 = array_keys($tableau_exercice_8);
$index_exercice_8 = 0;
while ($index_exercice_8 < count($keys_exercice_8)) {
    $nom = $keys_exercice_8[$index_exercice_8];
    $infos = $tableau_exercice_8[$nom];
    echo "Nom: $nom, Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}\n";
    $index_exercice_8++;
}

// Exercice 11 - Utiliser une boucle while pour lire le tableau de l'exercice 9
echo "\nExercice 11 - While pour le tableau de l'exercice 9:\n";
$keys_exercice_9 = array_keys($tableau_exercice_9);
$index_exercice_9 = 0;
while ($index_exercice_9 < count($keys_exercice_9)) {
    $nom = $keys_exercice_9[$index_exercice_9];
    $infos = $tableau_exercice_9[$nom];
    echo "Nom: $nom, Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}\n";
    $index_exercice_9++;
}
?>
