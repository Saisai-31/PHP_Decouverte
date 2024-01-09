<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document 2</title>
</head>
<body>
    <?php
        $cnx = mysqli_connect("localhost", "root", "", "mabaseauto");

        if(mysqli_connect_errno()){
        echo "Erreur de connexion à la base ".mysqli_connect_error();
        }

        //$sql="create user 'tonton'@'localhost' IDENTIFIED BY 'tantine'"; 
        $sql1="grant all  on mabaseauto.* to 'tonton'@'localhost'";

        if($cnx -> query($sql1) === TRUE){
            echo " Bravo ! , utilisateur ajouté avec succès !<br><br>";
        }else{
            echo " Erreur : ".$query."<br>".$cnx -> error;
        }
       
        mysqli_close($cnx);
    ?>








</body>
</html>