<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        input[type="image"] {
            width: 150px; /* Ajustez la taille selon vos besoins */
            margin: 0 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Choisissez une option :</h2>

    <form action="traitement.php" method="post">
        <input type="image" src="image1%20louer.jpeg" name="action" alt="Louer1">
        <input type="image" src="image1%20acheter.jpeg" name="action" alt="Acheter1">
        <input type="image" src="image1%20vendre.jpeg" name="action" alt="Vendre1">
        <input type="image" src="image2%20vendre.jpeg" name="action" alt="Vendre2">
    </form>

</body>
</html>
