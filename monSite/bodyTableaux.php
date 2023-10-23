<div class="content">
        <h1>Les Tableaux</h1>
    
  	<?php
      $tb = ["Paris", "Londres", "Rome", "Berlin"];
      echo $tb[1];
      echo "<br>";
      for($i=0;$i<3; $i++){
        echo $tb[$i], "<br>";
      }

      $tab = [
        "Paris"=>"France",
        "Rome"=>"Italie",
        "Berlin"=>"Allemagne",
        "Berne"=>"Suisse"
      ];
      echo "Le nombre de ligne du tableau est de ".count($tab);
      echo "<br>";
      echo $tab["Berlin"];
      echo "<br>";
    //Pour parcourir un tel tableau, il faut employer la boucle foreach
      foreach($tab as $ville=>$pays){
         echo $ville."->".$pays."<br>";
       }
       
       echo "<br><br>.........................................<br><br>";

       //Création du tableau dynamique de 9 éléments grace à la fonction pow(puissance)
       for($i=0; $i<=8; $i++){
        $tab2[$i] = pow(2,$i);
      }
        //Lecture des valeurs du tableau
        echo "Les puissances de 2 sont : ", "<br />";
          foreach($tab2 as $val){
            echo $val." : ";
          }

        echo "<br><br>.........................................<br><br>";

        //Créer un tabeau associatif dont les clés sont les identifiants et associé à chacun un code aléatoire compris
        //entre 100 et 1000 puis lit et affiche les clés et les valeurs du tableau

        //Création du tableau
        for($i=0; $i<=8; $i++){
          $tob["Client".$i] = rand(100, 1000);
        }
        //Lecture des valeurs
        foreach($tob as $cle=>$val){
          echo "Le client de login <b>$cle</b> a le code <b>$val</b><br />";
        }
       
        echo "<br><br>.........................................<br><br>";

        for($i=0; $i<=10; $i++){
          $tab3[$i] = pow(2,$i);
        }
        //lecture des indices de valeurs
        foreach($tab3 as $ind=>$val){
          echo "<br>2 puissance $ind vaut $val";
        }
        echo "<br><br> Dernier indice ".$ind, " , dernière valeur ", $val;

        echo "<br><br>.........................................<br><br>";

        $tab = array(
          array = ("LIBRAIRIE", "TITRES", "REMISE"),
          array = ("FNAC", "GOOGLE SHEETS", "40%"),
          array = ("FNAC", "EXCEL", "40%"),
          array = ("EXPRESS", "GOOGLE DOCS", "30%"),
          array = ("EXPRESS", "GOOGLE SLIDES", "40%"),
        )

    ?>
      
    </div>