<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exo 2</title>
</head>
<body>
    <a href="index.php">Accueil</a>
    <a href="exo1.php">Exercice 1: Déclaration et Affichage de Variables</a>
    <a href="exo2.php">Exercice 2: Opérations sur les Variables</a>
    <a href="exo3.php">Exercice 3: Concaténation de Chaînes</a>

    <h1>Exercice 2: Opérations sur les Variables</h1>
    <p>Créez deux variables $a et $b avec des valeurs numériques.</p>
        <?php
            $a = 5;
            $b = 3;
            echo "variable a : ".$a;
            echo "<br>";
            echo "variable b : ".$b;
        ?>
    <p>Additionnez-les et affichez le résultat.</p>
        <?php
            $add = $a + $b;
            echo $add;
        ?>
    <p>Soustrayez-les et affichez le résultat.</p>
        <?php
             $souss = $a - $b;
             echo $souss;
        ?>
    <p>Multipliez-les et affichez le résultat.</p>
        <?php
            $multi = $a * $b;
            echo $multi;
        ?>
    <p>Divisez-les et affichez le résultat.</p>
        <?php
            $div = $a / $b;
            echo $div;
        ?>

</body>
</html>