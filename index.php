<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            text-align: center;
            background-color: #f0f0f0;
        }

        h1, h2 {
            color: #333;
        }

        select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .moi {
            text-align: left;
            width: 40%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            background-color: #fff;
            color: #333;
        }

        label {
            font-size: 15px;
            color: blue;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <section class="moi">
        <h3>
            APROPOS DE MOI <br>
            CODE : 220687 <br>
            NOM : aidara <br>
            PRENOM : khadija<br>
            CLASSE : BIG 2 <br>
        </h3>
    </section>

    <a href="PAGE_ACCEUIL.PHP">Acceuil</a>

    <h2>Cliquer ci-dessous !</h2>
    <select id="exercice" onchange="window.location.href=this.value">
    <option value="" selected disabled>Selectionnez un exercice</option>

        <?php
        for ($i = 1; $i <= 18; $i++) {
            echo "<option value='Exercice{$i}.php'>exercice {$i}</option>";
        }
        ?>
    </select>
</body>
</html>
