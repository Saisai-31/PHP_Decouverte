<form action="" method="post">
    <input type="text" name = "id">
    <input type="text" name = "nom">
    <input type="text" name = "prenom">
    <input type="text" name = "email">
    <input type="submit" name = "Envoyer">
</form>

<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $dbname = 'mbdd';

     $conn = new mysqli($servername, $username,$password,$dbname);
        if($conn -> connect_error){
            die("Connexion failed : " .$conn -> connect_error);
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];

            $query = "UPDATE utilisateurs SET nom = '$nom', prenom = '$prenom', email = '$email' WHERE id_utilisateur = $id";
        

        if($conn -> query($query) === TRUE){
            echo "Bravo, l'utilisateur est mis à jour avec succès !";
        }else{
            echo "Erreur : ".query."<br>".$conn -> error;
        }
    }

?>