
   <form action="ajouter.php" method="post">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="text" name="email">
        <input type="submit" name="Envoyer">
   
   
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
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
        

            $query = "INSERT INTO utilisateurs (nom, prenom, email) VALUE ('$nom', '$prenom', '$email')";

            if($conn -> query($query) === TRUE){
                echo " Bravo ! , utilisateur ajouté avec succès !";
            }else{
                echo " Erreur : ".$query."<br>".$conn -> error;
            }
        }
    

        $conn -> close();

    ?>