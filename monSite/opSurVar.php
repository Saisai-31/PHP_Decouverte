<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Manipuler les variables</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="opSurVar.php">Opération sur les variables</a>
            <a href="date.php">Date</a> 
            <a href="structureControle.php">Structure de Contrôle</a>
            <a href="testCondition.php">Test de conditions</a>   
            <a href="boucle.php">Les Boucles</a>
        </nav>
    </header>

    <div class="content">
        <h1>Manipuler les variables</h1>

    <?php
        echo "<br>";
        $hab = 15230;
        echo $hab;
        echo "<br>";
        $hab = 102;
        echo $hab;
        $ville = "Orléans";
        $dep = "Loiret";
        $titre = $ville. " dans le " .$dep;
        echo "<br>";
        echo $titre;
        echo "<br>";
        $nn = "Salut";
        $mm = "Bob";
        $pp = "Copain";
        $affich = $nn. " " .$mm. ", tu veux être mon ami " .$pp. " ?";
        echo $affich;
        echo "<br>";
        $a =1;
        $b= 3;
        $a = $a + 2;
        echo " premier : " .$a;
        echo "<br>";
        $a = $a * $b;
        echo "deuxième : " .$a;
        $a= $a - 1;
        echo "<br>";
        echo " troisième : " .$a;
        echo "<br>";
        $a = $a / 4;
        echo "quatrième : " ,$a;
        echo "<br>";
        print("cinquième : " .$a); //Comme echo, à connaitre mais moins utilisé

    ?>
    </div>

    <footer>
        <p>Saïsaï</p>
        &copy;DWWM 2023
    </footer>
    
</body>
</html>