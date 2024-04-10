  <?php
    // FONCTIONS UTILITAIRES
    function connectDb()
    {
        // Connexion à la base de données
        $connexion = mysqli_connect("localhost", "root", "", "contact_cv");

        //Je teste que la connexion s'est bien effectué. Dans le cas contraire je recois un message d'erreur.
        if (mysqli_connect_errno()) {
            return "erreur de connexion à la base " . mysqli_connect_error();
            exit();
        }
        return $connexion;
    }

    //trim enlève les espaces à la fin du champs.
    //Avec isset je vérifie que $_POST existe et que les clés (salutaion, nom, email, ...) existent égalemant 
    //Je vérifie également que les clés (salutation, nom ...) sont bien présentes.
    //A la fin je vérifie que les clées nom et email ne sont pas vide.
    if (
        isset($_POST) &&
        isset($_POST['salutation'], $_POST['nom'], $_POST['email'], $_POST['telephone'], $_POST['objet'], $_POST['message']) &&
        trim($_POST['nom']) !== "" &&
        trim($_POST['email']) !== ""
    ) {
        //J'appel ma fonction pour me connecter à la BDD
        $con = connectDb();

        //Création des variables pour récupérer les données de mes champs du formulaire
        //addslashes https://www.php.net/manual/fr/function.addslashes.php
        //permet de nettoyer des caractères spéciaux (', "", ...) et de me protéger 
        //contre les injections SQL
        $salutation = htmlspecialchars($_POST['salutation']);
        $nomPrenom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $objet = htmlspecialchars($_POST['objet']);
        $message = addslashes($_POST['message']);

        //Je créé ma reqête d'insertion SQL
        $sql = "insert into contact (id_contact, salutation, nom, email, telephone, objet, message) values('', '$salutation', '$nomPrenom','$email', '$telephone', '$objet', '$message')";
        $result = mysqli_query($con, $sql) or die("Echec de la requête insert");
        echo "Vos informations ont bien été enregistrées";
        //Je ferme la connexion
        mysqli_close($con);
    }
    ?>