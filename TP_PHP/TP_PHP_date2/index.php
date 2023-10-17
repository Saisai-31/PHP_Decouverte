<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TP PHP Dates 2</title>
</head>
<body>
    <h1>TP PHP Dates 2</h1>

    <div>
    <p>Exercice 1 : Création et Affichage de Variables</p>
        <ul>
            <li>Créez une variable appelée $nom et attribuez-lui votre nom</li>
            <li>Créez une variable appelée $age et attribuez-lui votre âge.</li>
            <li>Affichez ces variables en utilisant echo.</li>
        </ul>
    <?php
        $nom = "Cyril Pholoppe";
        $age = 45;
        echo "Ma variable nom est ".$nom;
        echo "<br>";
        echo "Ma variable age est ".$age;
        echo "<br>";
        echo "Je suis ".$nom." et j'ai ".$age." ans";


    ?>
    </div>


        <div class="decalage">
        <p>Exercice 2 :   Opérations sur les variables</p>
            <ul>
                <li>Créez une variable $anneeDeNaissance et attribuez-lui l'année de naissance.</li>
                <li>Calculez votre âge en soustrayant $anneeDeNaissance de l'année actuelle et stockez le résultat dans une nouvelle variable $ageCalcule.</li>
                <li>Affichez la phrase "J'ai X ans." en utilisant la variable $ageCalcule.</li>
            </ul>
        <?php
            $anneeDeNaissance = 1978;
            $annéeAcutelle = strftime("%Y");
            $ageCalcule = $annéeAcutelle - $anneeDeNaissance;
            echo "Ma variable anneeDeNaissance est ".$anneeDeNaissance;
            echo "<br>";
            echo "Ma variable annéeAcutelle est " .$annéeAcutelle;
            echo "<br>";
            echo "J'ai ".$ageCalcule." ans";

        ?>
        </div>

    
</body>
</html>