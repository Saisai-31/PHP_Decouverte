<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exo 1</title>
</head>
<body>
    <a href="index.php">Accueil</a>
    <a href="exo1.php">Exercice 1: Déclaration et Affichage de Variables</a>
    <a href="exo2.php">Exercice 2: Opérations sur les Variables</a>
    <a href="exo3.php">Exercice 3: Concaténation de Chaînes</a>

    <h1>Exercice 1: Déclaration et Affichage de Variables</h1>    
    <p>1/ Déclarez une variable $nom avec votre nom et affichez-la.</p>
        <?php
            $nom = "Pholopppe";
            echo $nom;
        ?>

    <p>2/ Déclarez une variable $age avec votre âge et affichez-la.</p>
        <?php
            $age = 45;
            echo $age;
        ?>

    <p>3/ Déclarez une variable $ville avec le nom de votre ville et affichez-la.</p>
    <?php
        $ville = "Toulouse";
        echo $ville
    ?>

</body>
</html>