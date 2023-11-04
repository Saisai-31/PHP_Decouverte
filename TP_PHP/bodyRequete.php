<div class="content">
        <h1>TP PHP N3 ex p Les BDD</h1>

	<?php
    //1. Connecter vous à la base casse2
        $cnx = mysqli_connect("localhost", "root", "", "casse2");
        if(mysqli_connect_errno()){
        echo "Erreur de connexion à la base ".mysqli_connect_error();
        }


    //2. Afficher toutes les personnes qui vivent à Paris ou à Bordeaux
        $sql = "SELECT * FROM personne WHERE Ville = 'Paris' OR ville = 'Bordeaux'";
        if($result = mysqli_query($cnx, $sql)){
            echo "Pour cette requête <br> ".$sql."<br><br>";
            echo "Il y a : " .mysqli_num_rows($result). " réponses<br>";
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
        echo "<br><br>";
        //Annule le jeu de résultat
        mysqli_free_result($result);
        }
   
	
    //3. Afficher toutes les personnes dont l'âge est compris entre 25 et 40 ans
        $sql = "SELECT * FROM personne WHERE age >= 25 AND age <= 40";
        if($result = mysqli_query($cnx, $sql)){
            echo "Pour cette requête <br> ".$sql."<br><br>";
            echo "Il y a : " .mysqli_num_rows($result). " réponses<br>";
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
        echo "<br><br>";
   
         mysqli_free_result($result);
        }
   

    //4. Afficher les personnes dont le nom comprend la lettre "n"
        $sql = "SELECT * FROM personne WHERE nom LIKE '%n%'";
        if($result = mysqli_query($cnx, $sql)){
            echo "Pour cette requête <br> ".$sql."<br><br>";
            echo "Il y a : " .mysqli_num_rows($result). " réponses<br>";
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
        mysqli_free_result($result);
        }
   
    //Je ferme la connexion à la base de données
        mysqli_close($cnx);

    ?>

    </div>