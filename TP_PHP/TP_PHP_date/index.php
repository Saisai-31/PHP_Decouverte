<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TP PHP Dates</title>
</head>
<body>
    <h1>TP PHP Dates</h1>

    <div>    
    <p>TP 1: Afficher la Date Actuelle</p>
        <ul>
            <li>Affichez la date actuelle au format "AAAA-MM-JJ HH:MM:SS".</li>
        </ul>
    <?php
        $dateActuelle = date("Y-m-d H:i:s");
        echo "<br>Date actuelle: $dateActuelle";
        echo "<br>";
        echo "<br>";
    ?>
    </div>

    <div class="decalage">    
    <p>TP 2: Afficher le Jour de la Semaine</p>
        <ul>
            <li>Affichez le nom du jour de la semaine correspondant à la date actuelle.</li>
        </ul>
    <?php
    echo strftime("%A").'<br>';
    setlocale(LC_TIME, 'French'); //On définit le français
    echo strftime("%A").'<br>';
    echo "<br>";
    ?>
    </div>

    <div>
    <p>TP 3: Calculer l'Âge</p>
        <ul>
            <li>Créez une variable $anneeDeNaissance et attribuez-y l'année de naissance d'une personne.</li>
            <li>Utilisez la date actuelle pour calculer et afficher l'âge de cette personne.</li>
        </ul>
    <?php
        $anneeDeNaissance = 1978;
        $anneeActuelle = date("Y");
        echo "Je suis né en ".$anneeDeNaissance;
        echo "<br>";
        $age = $anneeActuelle - $anneeDeNaissance;
        echo "J'ai ".$age." ans";
        echo "<br>";
        echo "<br>";
    ?>
    </div>

    <div class="decalage">
    <p>TP 4: Formater une Date Personnalisée</p>
        <ul>
            <li>Créez une variable $date contenant une date au format "JJ/MM/AAAA".</li>
            <li>Affichez cette date au format "AAAA-MM-JJ".</li>
        </ul>
        <?php
        $date = "10-12-2023";
        echo $date;
        echo "<br>";
        $timestamp = strtotime($date);
        $date = date("Y-m-d", $timestamp);
        echo $date;
        ?>
    </div>

</body>
</html>