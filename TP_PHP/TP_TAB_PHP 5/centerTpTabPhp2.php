<div class="content">
  <?php
      echo "<ol><strong>Objectif</strong>
              <li>Manipuler les tableaux en PHP,</li>
              <li>Initialiser, ajouter, rechercher les éléments et l'afficher les tableaux.</li>
          </ol>";

        echo "<br><br>";

        echo '1.Créez un tableau associatif appelé $personne avec les clés "nom", "prénom" et "âge". Initialisez ces clés avec les valeurs correspondantes.';
        echo "<br>";
        $personne = array("Nom"=>"Pholoppe", "Prenom"=>"Cyril", "Age"=>45);
        // $personne = [
        //     ["Nom"=>"Pholoppe", "Prenom"=>"Cyril", "Age"=>45],
        //     ["Nom"=>"Latuce", "Prenom"=>"Christophe", "Age"=>33],
        //     ["Nom"=>"Jupiter", "Prenom"=>"Maddie", "Age"=>22],
        //     ["Nom"=>"Roblas", "Prenom"=>"Laura", "Age"=>52],
        //     ["Nom"=>"Petrus", "Prenom"=>"Yanis", "Age"=>18]
        // ];
        print_r($personne);
        echo "<br><br>";

        echo '2. Créez un tableau numérique appelé $nombres contenant les nombres de 1 à 10.';
        echo "<br>";
        for($i=1; $i<=10; $i++){
            echo $nombres[] = $i." ";
        };

        echo "<br><br>";

        echo '3. Ajoutez un élément avec la clé "ville" au tableau $personne avec la valeur de votre choix.';
        echo "<br>"; 
        $personne["Ville"] = "Toulouse";
        print_r($personne);

        echo "<br><br>";

        echo '4. Ajoutez les nombres de 11 à 20 au tableau $nombres.';
        echo "<br>";
        for($i=11; $i<=20; $i++){
            echo $nombres[] = $i." ";
        };
        echo "<br>";
        print_r($nombres);

        echo "<br><br>";

        echo 'Vérifiez si le tableau $nombres contient le nombre 15. Affichez un message indiquant si le nombre est présent ou non.';
        echo "<br>";
        for($i=1; $i<count($nombres); $i++){
            if($nombres[$i]==15){
                echo "Le nombre 15 est présent.";
            }
        }

        echo "<br><br>";

        echo "Affichez le nom et l'âge de la personne à partir du tableau personne.";
        echo "<br>";
            echo $personne["Nom"];
            echo "<br>";
            echo $personne["Age"];

        echo "<br><br>";

        echo '7. Utilisez une boucle pour afficher tous les éléments du tableau nombres.';
        echo "<br>";
            for($i=0; $i<count($nombres); $i++){
                echo $nombres[$i];
            };

        echo "<br><br>";

        echo '8. Utilisez une boucle foreach pour afficher tous les éléments du tableau personne.';
        echo "<br>";
            foreach($personne as $cle=>$valeur){
                echo $cle."=>".$valeur."<br>";
            }
  ?>

</div>