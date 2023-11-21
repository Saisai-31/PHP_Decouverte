<?php
    include('entete.php');
?>

<form action="ajouter.php" method="post">
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="text" name="email">
    <input type="submit" name="Envoyer">
</form>
<br>

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
            echo " Bravo ! , utilisateur ajouté avec succès !<br><br>";
        }else{
            echo " Erreur : ".$query."<br>".$conn -> error;
        }
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

    $conn -> close();

?>