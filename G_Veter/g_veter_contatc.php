<Div id="info">
    <h3>G Veter</h3>
    <br>
    <p>Numéro d'agrément : 25p58po63</p>
    <br>
    <p>25, rue du Bonheur</p>
    <p>45000 Orléans</p>
    <br>
    <p>02 38 00 00 00</p>
    <br>
    <p>contact@gveter.com</p>
</Div>

<form action="" method="post">
    <fieldset>
        <legend>Prendre un RDV</legend>
        <input id="text" type="text" name="nom" placeholder="Votre nom" required>
        <input type="text" name="animal" placeholder="Votre animal" required>
        <input type="tel" name="telephone" placeholder="Votre numéro de téléphone" required>
        <input type="email" name="email" placeholder="Votre email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
        <input type="datetime-local" name="date_heure" required>
        <input id="envoi" type="submit" value="Envoyer">
        <input id="annule" type="reset" value="Annuler">
    </fieldset>
</form>


<!-- Connexion du formulaire avec ma base de donnée -->   
<?php
// FONCTIONS UTILITAIRES
function connectDb(){
    // Connexion à la base de données
    $connexion = mysqli_connect("localhost", "root", "", "veter");

    //Je teste que la connexion s'est bien effectué. Dans le cas contraire je recois un message d'erreur.
    if(mysqli_connect_errno()){
        echo "erreur de connexion à la base ".mysqli_connect_error();
        exit();
    }
    return $connexion;
}

//Avec isset je vérifie que $_POST existe et que les clés (nom, animal, telephone ...) existent.
if(
    isset($_POST) &&
    isset($_POST['nom'], $_POST['animal'], $_POST['telephone'], $_POST['email'], $_POST['message'], $_POST['date_heure'])    
){
    //J'appel ma fonction pour me connecter à la BDD
    $con = connectDb();
            
    //Création des variables pour récupérer les données de mes champs du formulaire

    //addslashes https://www.php.net/manual/fr/function.addslashes.php
    //permet de nettoyer des caractères spéciaux (', "", ...) et de me protéger 
    //contre les injections SQL
    $nom = addslashes($_POST['nom']);
    $animal = addslashes($_POST['animal']);
    $telephone = addslashes($_POST['telephone']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);
    $date_heure = addslashes($_POST['date_heure']);

        //Je créé ma reqête d'insertion SQL
        $sql = "insert into rdv (id, nom, animal, telephone, email, message, date_heure) values('', '$nom', '$animal', '$telephone', '$email', '$message', '$date_heure')";
        $result = mysqli_query($con, $sql) or die ("Echec de la requête insert : " . mysqli_error($con));
        echo "<p class='reponse'>Vos informations ont bien été enregistrées</p>";
    

    //Je ferme la connexion
    mysqli_close($con);
}
?>


<script>
            // Bloquer les jours antérieurs à la date actuelle
            var today = new Date();
            var formattedToday = today.toISOString().slice(0, 16);

            //document.getElementById("date").setAttribute("max", formattedToday );
            document.getElementById("date").setAttribute("min", formattedToday );
        </script>
   
</main>