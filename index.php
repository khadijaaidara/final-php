<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Exercices PHP</title>

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

        p {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .description {
            text-align: left;
            margin-bottom: 40px;
        }

        .moi {
            text-align: left;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            background-color: #fff;
            color: #333;
        }

        label {
            font-size: 15px;
            color: #3498db;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Bienvenue sur ma page d'accueil d'exercices PHP !</h1>
        <p>Explorez ces exercices PHP soigneusement conçus pour vous aider à renforcer vos compétences dans ce langage de programmation puissant. Chaque exercice couvre différents aspects de PHP, vous permettant de pratiquer et de consolider vos connaissances de manière interactive.</p>
    </div>

    <section class="moi">
        <h3>
            APROPOS DE MOI <br>
            CODE : 220687 <br>
            NOM : aidara <br>
            PRENOM : khadija<br>
            CLASSE : BIG 2 <br>
        </h3>
    </section>

    <div class="container description">
        <h2>Cliquez ci-dessous pour commencer :</h2>
        <select id="exercice" onchange="window.location.href=this.value">
            <option value="" selected disabled>Choisissez un exercice PHP</option>

            <?php
            for ($i = 1; $i <= 18; $i++) {
                echo "<option value='Exercice{$i}.php'>Exercice {$i}</option>";
            }
            ?>
        </select>
    </div>

    <footer>
        <a href="PAGE_ACCEUIL.PHP">Accueil</a>
    </footer>

</body>

</html>
