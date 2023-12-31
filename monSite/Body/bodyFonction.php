<div class="content">
        <h1>Les Fonctions</h1>
    
  	<?php

  // UNE FONCTION
  //
  // Correspond à une série d'instructions qui effectuent une tâche spécifique.
  // Pour exécuter une fonction il faut appeler la fonction par son nom en plaçant ou non des paramètres.
  // On parle souvent de fonctions personnalisées quand on écrit soi-même les instructions. 
  // Mais on parle aussi de fonctions PHP ou prédéfinies quand on utilise une commande qui effectue une tâche, comme pr exemple
  // "strval", "strtotime", ou d'autres encore.


  /*
    NOTION DE PORTEE DE VARIABLE

    La portée de variables indique l'emplacement dans lequel elle est accessible. 
    Une variable peût-être locale ou globale.
    * Toutes variables définies en dehors d'une fonction ont une portée globale.
    * Toutes variables définies à l'intérieur de la fonction auront une portée locale à la fonction. 
      Cela signifie que la variable ne sera accessible qu'au sein de la fonction et sera détruite des la fin de ladite fonction.
    Toute variable définie dans une fonction avec le mot clé global sera considéré comme global et pourra changer de valeur dans 
    les différents scripts.
  */

      function bonjour(){
        print("Salut John");
      } 
      bonjour();
      echo "<br>";

      function bonjour1($prenom){ //prenom est un paramètre
        print("Salut ".$prenom);
      }
      bonjour1("Maddie"); //Maddie est un argument

      //Opérateur numérique dans les fonctions
      function addition($nbre, $nbre2){
        $resultat = $nbre + $nbre2;
        echo "<br>".$resultat;
      }
      addition(1,2);
      echo "<br>";

      function calculTVA(){
        return 100*1.2;
      }
      //J'exécute ma fonction calculTVA en l'appelant
      echo "Fonction de calcul de la tva1, ajouter 20% à 100 = ".calculTVA()."<br>";

      function calculTVA2($nombre){
        return $nombre*1.2;
      }
      echo "Fonction de calcul de la tva2, ajouter 20% à 500 = ".calculTVA2(500)."<br>";
      echo "Fonction de calcul de la tva2, ajouter 20% à 2500 = ".calculTVA2(2500)."<br>";

      function calculTVA3($montant, $taux){
        return $montant * $taux;
      }
      echo "500€ avec un taux de 5.5% font ".calculTVA3(500,1.055)."<br>";
      echo "4000€ avec un taux de 20% font ".calculTVA3(4000,1.2)."<br>";

      function afficherDate($jr, $mois, $annee){
        echo $jr.' '.$mois.' '.$annee;
      }
      afficherDate(25, "octobre", 2023);
      echo "<br>";

      function volume($largeur, $longueur, $hauteur){
        echo "Le volume est : ".$largeur*$longueur*$hauteur." cm3";
      }
      volume(10,10,10);
      echo "<br>";

      function test($nom){
        echo $nom;
      }
      test("Albert");
       echo "<br>";

      function calcul_remise($h1){
        global $taux_remise;
        $taux_remise = 0.3;
        return $h1 * $taux_remise;
      }
      //Je définis une fonction qui calcul la tva
      function calcTVA($h2){
        global $taux_tva;
        $taux_tva = 0.2;
        return $h2*$taux_tva;
      }
      $ht = 100;
      //Je récupère la remise à déduire
      $remise = calcul_remise($ht);
      echo "La remise est : ".$remise."<br>";
      //Je récupère la tva à ajouter
      $tva = calcTVA($ht);
      echo "La tva est : ".$tva."<br>";
      //Calcul ttc
      $ttc = $ht - $remise + $tva;
      //Je récupère le ttc
      echo "Le ttc est : ".$ttc."<br>";

      echo "<br>";
      echo "<br>";

      echo "Autres types de fonction avancées.";
       /*
      1/ Fonction statique
      Une variable statique déclarée à l'intérieur d'une fonction à l'aide de l'instruction statique permet à celle-ci de garder sa valeur à chaque appel de la fonction. L'intitialisation d'une variable static se fait au début de la fonction et à chaque appel de la fonction. L'initialisation d'une variable static se fait au début de la fontion et à chaque appel de la fonction dans le script et elle gardera la valeur du dernier appel. 
       */
      function stat_fonc(){
        static $cpt = 0;
        $cpt++;
        echo $cpt;
      }
      echo "<br>A premier affichage, cpt vaut : " ; stat_fonc();
      echo "<br>";
      // doit afficher 2 car le premier appel initialise $cpt à 0 une seule fois et l'incrémente de 1

      echo "Au 2ème affichage, cpt vaut : "; stat_fonc();
      echo "<br>";
      echo "Au 3ème affichage, cpt vaut : "; stat_fonc();
      echo "<br>";

      /*
      2/ Fontions avancées
      Il existe 3 fonctions utilisées dans la gestin des arguments passés à une fonction dans PHP. Il s'agit de : 
      - func_get_arg qui permet de lire un argument spécifique
      - func_get_args pour obtenir l'ensemble des arguments sous forme d'untableau. 
      - func_num_args pour connaitre le nombre d'arguments recu par la foonction. 
      */
      function gestion_arg(){
        $numargs = func_num_args();
        echo "<br>gestion_args <br>";
        echo "Nombre d'arguments : $numargs\n <br>"; // Affiche le nombre d'arguments renseignés à l'appel de la fonction
      }
      gestion_arg(89, 654);
      echo "<br>";
      

      function gestion_arg_2(){
        $numargs = func_num_args();
        echo "Nombre d'arguments : $numargs\n <br>";
        if($numargs >=2){
          echo "Le permier argument est : " . func_get_arg(0) ."\n<br>";
          echo "Le deuxième argument est : " . func_get_arg(1) ."\n<br>";
          echo "Le troisième argument est : " . func_get_arg(2) ."\n<br>";

        }
      }
      gestion_arg_2(25, 2500, 1000);

      /*
      3/ Fonction dynamique 
        Vous pouvez vous trouvez dans le cas où vous ne savez pas quelle fonction devra être appelée à un moment précis dans un script donné.
      Pour cela, il suffit de placer dans une variable le nom d'une fonction, puis d'utiliser cette variable comme une fonction.
      */
      echo "<br><br>";

      function ecrire($texte){
        print($texte);
      };
      function ecrireEnGras($texte){
        print("<b>$texte</b>");
      };
      $fonction_var = "ecrire";
      $fonction_var("toto"); // affiche toto
      echo "<br>";
      
      $fonction_var = "ecrireEnGras";
      $fonction_var("toto"); // affiche toto en gras
      echo "<br>";
      echo "<br>";
      
      /*
     4/ La récursivité 
      le language PHP supporte les fonctions récursives. Une fonction récursive est une fonction qui s'appelle elle-même.
      Un exemple simple présentant le de la récursivité : Affichage à l'envers d'une chaine de caractères.
      */
      $str = "Hello world";
      reverse_r($str);
      function reverse_r($str){
        if(strlen($str) > 0){
          //substr retourne le 1er caractere
          reverse_r(substr($str, 1));
          echo"<br>";
          echo substr($str, 0, 1); //Affiche un caractère
          return;
        }
      }
/*
Les fonctions récursives sont principalement utilisées pour naviguer dans les strutures de données dynamiques (listes et arbres).
Autrement, dans de nombreux cas, la récursivité est équivalente à une répétition (ou itération). Les fonctions récursives sont plus lentes et consomment plus de mémoire que les itérations. 
*/
echo"<br>"; 
echo"<br>";
$str_1 = "Salut les amis !";
reverse_r_1($str_1);
function reverse_r_1($str_1){
  for($i = 1; $i <= strlen($str_1); $i++);{
  echo substr($str_1, -$i, 1); // affiche un caratère en partant de la fin
  }
  return;
}

echo"<br>"; 
echo"<br>";

function mafonction($nom){
  return $nom;
}
$lenom = mafonction("Helder");



function nomComplet($prenom, $lenom){
  echo $prenom. " " .$lenom;
}
nomComplet ("Helder", $lenom);





    ?>
      
    </div>