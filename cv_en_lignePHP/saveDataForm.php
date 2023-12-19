  <?php
// Je mets les fichiers requis pour PHPMailer
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");


// FONCTIONS UTILITAIRES
function connectDb(){
    // Connexion à la base de données
    $connexion = mysqli_connect("localhost", "root", "", "contact_cv");

    //Je teste que la connexion s'est bien effectué. Dans le cas contraire je recois un message d'erreur.
    if(mysqli_connect_errno()){
        return "erreur de connexion à la base ".mysqli_connect_error();
        exit();
    }
    return $connexion;
}


//Retourne true si l'email en paramètre existe dans la base de données
// Sinon retourne false si l'email en paramètre n'existe pas dans la base de donnée
function checkMail($email, $db){
    // verifier que l email soit rempli
    if($email !== ""){
    // verifier que l'email n'existe pas dans la BDD:
        $maRequete = "select id_contact from contact where email like '$email';";
        $result = $db->query($maRequete);
        if($r = mysqli_fetch_array($result)){
            // echo 'Résultat de la recherche : ' .$r['id_contact'].'<br>';
            return true;
        }else{
            return false;
        }
    }
    // si l'email est vide : 
    return false;
}

//Pratique pour utiliser et lire les var_dump
// echo "<pre>".var_dump($_POST)."</pre>";

//trim enlève les espaces à la fin du champs.
//Avec isset je vérifie que $_POST existe et que les clés (salutaion, nom, email, ...) existent égalemant 
//Je vérifie également que les clés (salutation, nom ...) sont bien présentes.
//A la fin je vérifie que les clées nom et email ne sont pas vide.
if(
    isset($_POST) &&
    isset($_POST['salutation'], $_POST['nom'], $_POST['email'], $_POST['telephone'], $_POST['objet'], $_POST['message']) && 
    trim($_POST['nom']) !== "" && 
    trim($_POST['email']) !== ""
){
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

    
    //J'ajoute la vérification de l'email avant insertion (je ne veux pas de doublons d'emails)
    if(checkMail($email, $con)){
        echo "Cet email existe déjà";
    }else{
        //Je créé ma reqête d'insertion SQL
        $sql = "insert into contact (id_contact, salutation, nom, email, telephone, objet, message) values('', '$salutation', '$nomPrenom','$email', '$telephone', '$objet', '$message')";
        $result = mysqli_query($con, $sql) or die ("Echec de la requête insert");
        echo "Vos informations ont bien été enregistrées";
    }


$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 465 SSL
$mail->IsHTML(true);
$mail->Username = "coucou.saisai@gmail.com.com";
$mail->Password = "mmmyjqhmewaucdka"; //mmmy jqhm ewau cdka
$mail->SetFrom("cyril.pholoppe@gmail.com");
$mail->Subject = "Application for Programmer Registration";
$mail->Body = $message;
$mail->AddAddress("cyril.pholoppe@gmail.com");
//$mail->AddAttachment( $path , 'filename' );


//$headers = "From: Sender\n";
//$headers .= 'Content-Type:text/calendar; Content-Disposition: inline; charset=utf-8;\r\n';
//$headers .= "Content-Type: text/plain;charset=\"utf-8\"\r\n"; #EDIT: TYPO

if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}

    //Je ferme la connexion
    mysqli_close($con);
}
?>

    
   
           

