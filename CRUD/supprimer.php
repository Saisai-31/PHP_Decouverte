<?php
    include('entete.php');
?>

<form action="" method="get">
    <input type="text" name = "id">
    <input type="submit" value = "Envoyer">
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
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    

        $query = "DELETE FROM utilisateurs WHERE id_utilisateur = $id";
    

        if($conn -> query($query) === TRUE){
            echo "Bravo, l'utilisateur a été supprimé avec succès !<br><br>";
        }else{
            echo "Erreur lor de la suppression : ".$query."<br>".$conn -> error;
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