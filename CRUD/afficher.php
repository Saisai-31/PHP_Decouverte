<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $dbname = 'mbdd';

     $conn = new mysqli($servername, $username,$password,$dbname);
        if($conn -> connect_error){
            die("Connexion failed : " .$conn -> connect_error);
        }

            $query = "SELECT * FROM utilisateurs";
            $result = $conn -> query($query);

            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    echo "ID : ".$row["id_utilisateur"]. 
                    " - Nom : " .$row["nom"] .
                    " - Prénom : " .$row["prenom"]. 
                    " - Email : ".$row["email"].
                    "<br>";
                }
            }else{
                echo " 0 résultats";
            }
        

?>