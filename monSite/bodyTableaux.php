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
       
       echo "<br>.........................................<br><br>";

       //Création du tableau dynamique de 9 éléments grace à la fonction pow(puissance)
       for($i=0; $i<=8; $i++){
        $tab2[$i] = pow(2,$i);
      }
        //Lecture des valeurs du tableau
        echo "Les puissances de 2 sont : ", "<br />";
          foreach($tab2 as $val){
            echo $val." : ";
          }

        echo "<br>.........................................<br><br>";

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
       
        echo "<br>.........................................<br>";

        for($i=0; $i<=10; $i++){
          $tab3[$i] = pow(2,$i);
        }
        //lecture des indices de valeurs
        foreach($tab3 as $ind=>$val){
          echo "<br>2 puissance $ind vaut $val";
        }
        echo "<br><br> Dernier indice ".$ind, " , dernière valeur ", $val;

        echo "<br><br>.........................................<br><br>";

        $teb = array(
          array("<b>LIBRAIRIE</b>", "<b>TITRES</b>", "<b>REMISE</b>"),
          array("FNAC", "GOOGLE SHEETS", "40%"),
          array("FNAC", "EXCEL", "40%"),
          array("EXPRESS", "GOOGLE DOCS", "30%"),
          array("EXPRESS", "GOOGLE SLIDES", "40%"),
        );
         echo "<table border=2 width=\"50%\">";
         //lecture de chaque ligne
         foreach($teb as list($librairie, $titre, $remise)){
        //j'affiche les donées dans les cases du tableau
           echo "<tr><td>$librairie</td><td>$titre</td><td>$remise</td></tr>";
        };
        echo "</table>";

        echo "<br><br>.........................................<br><br>";

        $tablo[1]="Pomme";
        $tablo[2]="Poire";
        $tablo[3]="Orange";
        $tablo[4]="Cerise";
        $tablo[5]="Mangue";
        //Je relie les éléments en les affichant dans le browser
        echo "<ol>"; // Je prépare une liste numéroté
        for($i=1;$i<=count($tablo); $i++){
          echo "<li>".$tablo[$i]."</li>"; //J'affiche chaque élément du tableau
        }
        echo "</ol>";

        echo "<br>";
        echo "<br>";

        $tablo1[]="Stylo";
        $tablo1[]="Crayon";
        $tablo1[]="Gomme";
        $tablo1[]="Règle";
        $tablo1[]="Cahier";
        //Je relie les éléments en commencant à 0
        for($i=0; $i<count($tablo1); $i++){
          echo $tablo1[$i]."<br>";
        }

        echo "<br>";
        echo "<br>";

        $tablo2 = ["Voiture","Vélo","Moto", "Camion", "Bateau"];
        echo "<br>";
        print_r($tablo2);

        /*
        En résumé
        Les tableaux sont des strutures de variables complexes à une ou plusieurs dimensions. Un indice numérique ou texte permet de 
        récupérer la valeur d'une case d'un tableau. Dans un indice numérique, on utilise une boucle for ou while pour lire 
        les éléments du tableau.
        Dans le cas d'un indice de type de texte, il faut employer la boucle foreach.
        Les tableaux servent aussi à organiser des matrices d'informations que l'on récupère si besoin en les parcourant à l'aide 
        d'une ou plusieurs boucles.
        */
    



    ?>
      
    </div>