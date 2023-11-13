<div class="content">
        <h1>Insérer les données dans MySQL</h1>

    <?php
/*
    Insérer les données dans MySQL
    Pour enregistrer e nouveaux enregistrememnts dans une table, on se sert de la commande SQL insert to.
    Les chaines sont placés entre apostrophes, exepté pour les valeurs numériques ou la valeur NULL, s'il n'y a pas de donnéesà insérer. 
    Il y a autant de valeur que de champs. 
*/

        $con = mysqli_connect("localhost", "root", "", "casse2");
        if(mysqli_connect_errno()){
            echo "erreur de connexion à la base ".mysqli_connect_error();
            exit();
        }

        //On crée la requête SQL
        $sql = "insert into personne (NumAch, Nom, Age, Ville, Sexe) values('', 'Alain', 32, 'Manchester', 'M')";
        echo "Insertion réalisée avec succès !";

        $result = mysqli_query($con, $sql) or die ("Echec de la requête insert");

        //Ferme la connexion
        mysqli_close($con);
    ?>
    </div>