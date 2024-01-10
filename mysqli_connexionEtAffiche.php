<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli connection</title>
</head>
<body>
  <h1>Se connecter et afficher des informations avec mysqli</h1>
  <?php
    $cnx = mysqli_connect("localhost", "toto", "tata", "mabaseauto");

    if(mysqli_connect_errno()){
    echo "Erreur de connexion à la base ".mysqli_connect_error();
    }

    $sql="select * from personnes";
   

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
      echo "<th>"."ID_personne"."</th>";
      echo "<th>"."Nom"."</th>";
      echo "<th>"."Prénom"."</th>";
      echo "<th>"."Ville"."</th>";
      echo "<th>"."Sexe"."</th>";
      
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

?>





</body>
</html>