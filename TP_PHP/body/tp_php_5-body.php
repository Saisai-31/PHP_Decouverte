<div class="content">

    <h1>TP PHP 5</h1>
 
    <?php
        echo "Exercice 1 : Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge de la personne.<br><br>";
        $personne = array("Zidane" => array("Zinedine", "Madrid", 51), "Pholoppe" => array("Cyril", "Toulouse", 45), "Marley" => array("Bob", "Paradis", 78));

        print_r($personne);

        echo "<br><br>";


        echo "Exercice 2 : Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec une série de valeurs associées.<br><br>";

        $personnes = array(
            "Zidane" => array(
                "Prenom" => "Zinedine",
                "Ville" => "Madrid",
                "Age" => 51
            ),
            "Pholoppe" => array(
                "Prenom" => "Cyril",
                "Ville" => "Toulouse",
                "Age" => 45
            ),
            "Marley" => array(
                "Prenom" => "Bob",
                "Ville" => "Paradis",
                "Age" => 78
            ),
        );

        print_r($personnes)."<br>";

        echo "<br><br>";

        echo "Exercice 3 : Utilisez une boucle foreach pour lire les tableaux des exercices 1 et 2. <br><br>";
        foreach($personne as $cle=>$valeur){
            echo "Clé $cle : ","<br>";
            foreach($valeur as $ind=>$val){
                echo "Valeur $ind : ", $val, "","<br>";
            }
        }

        echo "<br> 2 ème solutionn toujours avec la boucle foreach mais construite differement, ce qui donne un affichage différent.<br>";


        foreach($personnes as $nom =>$indice){
            echo "Non : ".$nom.", Prénom : ".$indice['Prenom'].", Ville de résidence : ".$indice['Ville'].", Age : ".$indice['Age']." ans.<br>";
         }

    ?>
</div>