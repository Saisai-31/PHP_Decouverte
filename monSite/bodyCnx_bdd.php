<div class="content">
    <h1>Les connexions aux bases de données</h1>
        
    <?php
      /*
      Se connecter à une base de données Mysql

      Pour travailler avec des informations stockées dans une base de données MySQL  sur internet, je dois d'abord me connecter au serveur stockant la base de données et enfin écrire les requêtes SQL qui interrogent puis renverront
      ce que je souhaite à l'intérieur de la page web du client (navigateur).

      Deux différent API
      Les instructions MySQL qui permettent d'accéder aux tables d'une base de données sont regroupé dans 2 API (Application Programming Interface) qui sont des groupes de fonctions : 

      * Le groupe MySQLi. Les fonctions issues de ce groupe sont réservées aux bases de données MySQL.
      * Le groupe PDO. Les fonctions issues de ce groupe peuvent accéder à plusieurs SGBDD différentes.

      Pour pouvoir se connecter à une base de données, il faut fournir au moins le nom du serveur, un nom d'utilisateur et un mot de passe : ex : localhost, root, ' ';
      Mais dans le cas d'un vrai serveur(serveur de production), c'est votre fournisseur (ex : OVH, 01.net, etc...) qui indiquera ces paramètres.

      On peut écrire des scripts PHP soit de manière précédural avec l'API MySQLi, soit avec le modèle orienté Objet et l'API PDO. Mais dans ce cas, il faut gérer les exceptions (les erreurs) qui peuvent se produire parceque le moteur PHP laisse une trace accessible de ce qui s'est passé au niveau de la connexion, comme le nom d'utilisateur et le mot de passe. La gestion des erreurs s'effectue avec le try...catch.
      */

      //Connexion vers le serveur avec l'API MySQLi
      $svr_name = "localhost"; // ou 127.0.0.1
      $user = "root";
      $pwd = "";

      //Je créé la connexion vers le serveur
      $con = mysqli_connect($svr_name, $user, $pwd);
      //Je teste si la connexion à réussi
      if(!$con){
        //J'arrête la connexion
        die("Echec de la connexion".mysqli_connect_error());
      }
      echo "Connection réussie";

      //Interroger une base de donnée à l'aide de l'API MySQLi
      /*
      On interroge les informations d'une table (bdd) par l'intermédiare d'une requête SQL qui renvoie un jeu de résultat qu'on affiche par la suite dans le navigateur (ou client).
      */
      



        
    ?>


