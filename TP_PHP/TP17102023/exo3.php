<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exo 3</title>
</head>
<body>
    <a href="index.php">Accueil</a>
    <a href="exo1.php">Exercice 1: Déclaration et Affichage de Variables</a>
    <a href="exo2.php">Exercice 2: Opérations sur les Variables</a>
    <a href="exo3.php">Exercice 3: Concaténation de Chaînes</a>

    <h1>Exercice 3: Concaténation de Chaînes</h1>
    <p>Créez une variable $prenom avec votre prénom.</p>
    <p>Créez une variable $nomComplet en concaténant $prenom, un espace et $nom.</p>
    <p>Affichez le résultat.</p>


    <?php
    $prenom = "Cyril";
    $nom = "Pholoppe";
    $nomcomplet = $prenom. " " .$nom;
    echo $nomcomplet;

    ?>
    
</body>
</html>