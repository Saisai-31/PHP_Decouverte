<div class="content">
        <h1>Manipuler les variables</h1>

    <?php
        echo "Afficher des variables :";
        echo "<br>";
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

        echo "<br><br>.........................................<br><br>";

        echo "Concaténation de variables";
        echo "<br>";
        echo "<br>";
        $nn = "Salut";
        $mm = "Bob";
        $pp = "Copain";
        $affich = $nn. " " .$mm. ", tu veux être mon ami " .$pp. " ?";
        echo $affich;
        
        echo "<br><br>.........................................<br><br>";

        echo "Addition, soustraction, multiplication et division de variables";
        echo "<br>";
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

        echo "<br><br>.........................................<br><br>";

        echo "Utilisation de print, c'est comme echo, à connaitre mais moins utilisé";
        echo "<br>";
        echo "<br>";
        print("cinquième : " .$a); //Comme echo, à connaitre mais moins utilisé

    ?>
    </div>