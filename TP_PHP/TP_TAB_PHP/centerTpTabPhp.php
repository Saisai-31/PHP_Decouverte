





<div class="content">

<?php
    echo "<ul><strong>Création et Accès aux Tableaux</strong>
            <li>Créez un tableau en PHP contenant les noms de cinq fruits.</li>
            <li>Affichez le deuxième élément du tableau.</li>
            <li>Ajoutez un nouveau fruit à la fin du tableau.</li>
            <li>Affichez la taille totale du tableau.</li>
            <li>Parcourez le tableau et affichez chaque élément sur une nouvelle ligne.</li>
        </ul>";

    $tableau = ["Cerise", "Pomme", "Poire", "kiwi", "Banane"];
    print_r($tableau);
    echo "<br>";
    echo "<br>";
    echo $tableau[1];
    echo "<br>";
    echo "<br>";
    $tableau[] = "Raisin";
    print_r($tableau);
    echo "<br>";
    echo "<br>";
    echo "La taille de mon tableau est de ".count($tableau)." lignes";
    echo "<br>";
    echo "<br>";
    for($i=0; $i<count($tableau); $i++){
        echo $tableau[$i], "<br>";
    }
    echo "<br><br>.............................................................<br><br>";

    echo "<ul><strong>Exo2: Manipulation de Tableaux</strong>
            <li>Créez un tableau associatif en PHP contenant les noms des étudiants et leurs notes (par exemple, 'Alice' => 18, 'Bob' => 15, etc.).</li>
            <li>Affichez la note de l'étudiant 'Alice'.Modifiez la note de 'Bob' à 17.</li>
            <li>Ajoutez un nouvel étudiant 'Charlie' avec une note de 16.</li>
            <li>Calculez la moyenne des notes des étudiants et affichez-la.</li>
        </ul>";

    $tab = [
        "Alice"=>18,
        "Bob"=>15,
        "Cyril"=>20,
        "Yolla"=>8
      ];
      foreach($tab as $prenom => $note){
        echo $prenom."->".$note."<br>";
      }
      echo "<br>";
      echo "La note d'Alice est : ".$tab["Alice"];
      echo "<br>";
      echo "<br>";
      $tab[1] = 17; //J'ai fais une erreur, j'ai créé une ligne alors que je voulais modifier une ligne
      array_pop($tab); //Je supprime mon erreur
      $tab["Bob"] = 17;

      foreach($tab as $prenom => $note){
        echo $prenom."=>".$note."<br>";
      }

      echo "<br>";
      echo "<br>";
      $tab["Charlie"] = 16;
      foreach($tab as $prenom => $note){
        echo $prenom."=>".$note."<br>";
      }
      echo "<br>";
      echo "<br>";
      $somme = array_sum($tab);
      $moyenne = $somme / count($tab);
      echo "La moyenne des notes est : " . $moyenne . "<br>";

      

?>

</div>