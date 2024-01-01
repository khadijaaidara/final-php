<!DOCTYPE html>
    <html>
    <head>
    <title>EXERCICE 6</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
        text-align: center;
    
    }

    </style>
    </head>
<body>
<a href="index.php">acceuille</a>
     <br>
     
    <h1>trouver les diviseurs d'un nombre saisi</h1>
    
<form method="post" action="">
    <label for="nombre">saississez un nombre :</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Afficher les diviseurs">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];

    
    if (is_numeric($nombre) && $nombre > 0 && is_int($nombre + 0)) {
        echo "<h2> Les diviseurs de $nombre sont : , </h2>";
        
       
       $diviseurs = "";
       for ($i = 1; $i <= $nombre; $i++) {
           if ($nombre % $i == 0) {
               $diviseurs .= $i . ", ";
           }
       }

       // Afficher les diviseurs en enlevant le dernier point-virgule et l'espace
       echo rtrim( "<p class='resultat'>  $diviseurs . </p>");
   } else {
       echo "<h2> Veuillez saisir un nombre entier positif. </h2>";
   }
}
?>

</body>
</html>
