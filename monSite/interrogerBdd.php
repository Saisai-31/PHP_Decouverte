<div class="content">
        
    <?php
     
      //Interroger une base de donnée à l'aide de l'API MySQLi
      /*
      On interroge les informations d'une table (bdd) par l'intermédiare d'une requête SQL qui renvoie un jeu de résultat qu'on affiche par la suite dans le navigateur (ou client).
      */
      $cnx = mysqli_connect("localhost", "root", "", "casse2");
      if(mysqli_connect_errno()){
      echo "Erreur de connexion à la base ".mysqli_connect_error();
      }
    //Je défini la requête
    $sql = "select * from personne order by numach asc";
    if($result = mysqli_query($cnx, $sql)){
      echo "Pour cette requête <br> ".$sql."<br><br>";
      echo "Il y a : " .mysqli_num_rows($result). "réponses<br>";
      echo "<html><style>";
      echo "table, th, td{
        border: 1px solid black;
      }";
   
    echo "</style>";
    echo "<body><table>";
    echo "<th>"."NumAch"."</th>";
    echo "<th>"."Nom"."</th>";
    echo "<th>"."Age"."</th>";
    echo "<th>"."Ville"."</th>";
    echo "<th>"."Sexe"."</th>";
    //Pour l'ensemble des lignes du jeu résultats, répète
    while($row = mysqli_fetch_row($result)){
      echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "<td>".$row[4]."</td>";
      echo "</tr>";
    }
    echo "</table></body></html>";
    //Annule le jeu de résultat
    mysqli_free_result($result);
    }
    //Ferme la connexion à la base de données
    mysqli_close($cnx);
        
    ?>


</div>