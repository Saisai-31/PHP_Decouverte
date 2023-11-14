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
        text-align: center;
      }";
   
    echo "</style>";
    echo "<body><table width=500>";
    echo "<th>"."NumAch"."</th>";
    echo "<th>"."Nom"."</th>";
    echo "<th>"."Age"."</th>";
    echo "<th>"."Ville"."</th>";
    echo "<th>"."Sexe"."</th>";
    //Pour l'ensemble des lignes du jeu résultats, répète
    // while($row = mysqli_fetch_row($result)){
    //   echo "<tr>";
    //   echo "<td>".$row[0]."</td>";
    //   echo "<td>".$row[1]."</td>";
    //   echo "<td>".$row[2]."</td>";
    //   echo "<td>".$row[3]."</td>";
    //   echo "<td>".$row[4]."</td>";
    //   echo "</tr>";
    // }
    while($row = mysqli_fetch_row($result)){
      echo "<tr>";
      for($i=0;$i<count($row);$i++){
      echo "<td>".$row[$i]."</td>";
  }
      echo "</tr>";
  }
    echo "</table></body></html>";
    //Annule le jeu de résultat
    mysqli_free_result($result);
    }
    //Ferme la connexion à la base de données
    mysqli_close($cnx);

    /*
    L'expression mysqli_num_row($result) renvoie le nombre de lignes dans le jeu de résultats qui est issu de la requête.

    L'expression $result = mysql_query($cnx, $sql) se connecte à la base de données par l'intermédiare de la variable déjà validé $cnx et utilise la requête spécifiée dans la variable $sql pour extraire un jeu de résultats qui est placé dans la variable $result.

    L'expression mysqli_fetch_row(to fetch qui signifie entre autre aller chercher quelqu'un) récupère une ligne d'information dans le jeu de résultats et la renvoie en tant que tableau associatif où chaque colonne représente les champs. Chaque nouvel appel à mysqli_fetch_row() renverra la prochaine ligne dans le jeu de résultats ou la valeur NULL s'il y a plus de ligne. 

    par conséquent, l'expression while(rox = mysqli_fetch_row($result) signifie "tant qu'il y a encore des lignes dans le jeu de résultats, répète les actions ci-dessous.

    ** Qelques fonction MySQL**
    Pour gérer les informations dans une bdd avec PHP, on utilise communément des fonction MySQLi.

    Opérateurs SQL        ||  Description
    Mysqli_affected_row       Renvoie le nombre de ligne affectées par la dernière requête
    Mysqli_close              Ferme une connexion
    Mysqli_connect_error      Renvoie un message d'erreur
    Mysqli_errno              Renvoie le dernier message d'erreur
    Mysql_get_client_info     Renvoie des information sur la librairie du clientMySQL
    Mysqli_query              Exécute une requête SQL.
    */
        
    ?>


</div>