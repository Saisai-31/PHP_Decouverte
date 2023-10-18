<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Les Boucles</title>
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
        <h1>Les Boucles</h1>
    <!--Elles permettent d'éxécuter plusieurs fois des blocs en fonction de la valeur d'une variable.
    On distingue les boucles while et les boucles for, foreach-->

        <?php
        //La boucle while
        //exécute un bloc de ligne de code tant qu'une condition est vrai.
        echo "Boucle while et do while";
        echo "<br>";
        echo "<br>";
        $a= 1;
        //tant que la variable est inférieur à 10
        while($a <= 10){
            echo "La valeur est : $a<br>";
            //J'incrémente la valeur de a
            $a++;
        }
        echo "<br><br>.........................................<br><br>";

        //Notion d'incrémentation et de décrémentation
        $x = 20;
        echo "x = ",$x;
        echo "<br>";
        $y = 12;
        echo "y = ",$y;
        echo "<br>";
        $x++; //Incrémente
        $y--; //Décrémente
        echo "La variable x est incrémenté et vaut : ".$x." et y est décrémenté et vaut maintenant : ".$y;

        echo "<br><br>.........................................<br><br>";

        //Je définis l'environnement en francais
        setlocale(LC_TIME, ['fr', 'fra', 'french']);
        //J'initialise une variable
        $nombre = 0;
        //faire
        do{
            //je récupère la date du jour avec un format et le nombre du jour
            $d1 = date("d/m/Y", strtotime('+'.$nombre.'days'));
            // j'affiche la date
            echo "<p>".$d1."<p>";
            // j'incrémente la variable
            $nombre++;
        }
        //Tant que la variable est inférieur ou égal à 15
        while($nombre <=15);

        echo "<br><br>.........................................<br><br>";

        /*
        La boucle 
        Elle indique de répéter une action un certain nombre de fois en fonction de la valeur du pointeur. La structure possède
        3 paramètres : un début, un test et une incrémentation qui s'éffectuent à la fin de chaque passage dans la boucle.
        */
        echo "Boucle FOR";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        for($p = 0; $p <= 5; $p++){
            echo "Je dis bonjour avec la boucle for : ".$p."<br>";
        }

        echo "<br><br>.........................................<br><br>";

        //La boucle Foreach
        echo "Boucle FOREACH";
        echo "<br>";
        $T["Janvier"] = "école";
        echo "<br>";
        $T["Septembre"] = "vacance";
            foreach($T as $mois => $periode){
                echo $mois. "===> ".$periode. "<br>";
            }





        ?>

    </div>

    <footer>
        <p>Saïsaï</p>
        &copy;DWWM 2023
    </footer>
</body>
</html>