<div class="content">

<h1>TP 1</h1>

  <?php
    echo "1/ Déclarez une variable nom avec votre nom et affichez-le.";
    echo "<br>";
    $nom = "Pholoppe";
    echo "Mon nom est : ".$nom.".";

    echo "<br><br>...........................................<br><br>";

    echo "2/ Créez une boucle for qui affiche les nombres de 1 à 5.";
    echo "<br>";
    for($i=1; $i<=5; $i++){
        echo $number[] = $i." ";
    }

    echo "<br><br>...........................................<br><br>";

    echo "3/ Créez un tableau de noms et affichez-les séparés par une virgule.";
    echo "<br>";
    $noms = ["Pholoppe", "Giagnoni", "Mbappé", "Emery", "Ramos"];
    for($i=0; $i<count($noms); $i++){
      echo $noms[$i].", ";
    }

    echo "<br><br>...........................................<br><br>";

    echo "4/ Créez une fonction calculerSomme qui prend deux paramètres et renvoie leur somme.";
    echo "<br>";
    function calculerSomme($nbr1, $nbr2){
      $somme = $nbr1 + $nbr2;
      return $somme;
    }
    echo "La somme de l'addition 5 + 3 est : ".calculerSomme(5, 3);

    echo "<br><br>...........................................<br><br>";

    echo "5/ Créez un formulaire HTML simple avec un champ de texte et un bouton de soumission. 
    Affichez le contenu du champ de texte lorsque le formulaire est soumis.";
    echo "<br>";
    ?>

    <form action="" method="get">
    Prénom : <input type="text" name="prenom"><br><br>
    <input type="submit"><br><br>
    </form>
    <p>Bonjour</p>
    <p>Votre prénom est <?php echo $_GET['prenom'];?></p>


      
  

</div>