<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">

<div class="label">Entrez votre nom d'utilisateur</div>
<input type="text" name="createUser" value="">
<br>

<div class="label">Entrez votre mot de passe</div>
<input type="password" name="createPwd" value="">
<br>

<input type="submit" name="createLogin" value="Valider">

</form>


<?php
function connectDb(){

$connexion = mysqli_connect("localhost", "root", "", "membership");

if(mysqli_connect_errno()){
    echo "erreur de connexion à la base ".mysqli_connect_error();
    exit();
}
return $connexion;
}

//Retourne true si le user en paramètre existe dans la base de données
// Sinon retourne false si le user en paramètre n'existe pas dans la base de donnée
function checkUser($login_, $db){
// verifier que le user soit rempli
if($login_ !== ""){
// verifier que le user n'existe pas dans la BDD:
    $myRequest = "select user from member where user like '$login_';";
    $result = $db->query($myRequest);
    if($r = mysqli_fetch_array($result)){
        
        return true;
    }else{
        return false;
    }
}
// si le user est vide : 
return false;
}
//Je vérifie également que les clés (createPwd et createPwd) sont bien présentes.
//A la fin je vérifie que les cléescreatePwd et createPwd ne sont pas vide.
if(
isset($_POST) &&
isset($_POST['createUser'], $_POST['createPwd']) && 
trim($_POST['createUser']) !== "" && 
trim($_POST['createPwd']) !== "")
{
//J'appel ma fonction pour me connecter à la BDD
$con = connectDb();

//Création des variables pour récupérer les données de mes champs du formulaire
@$login_ = htmlspecialchars($_POST['createUser']);
@$password_ = MD5(htmlspecialchars($_POST['createPwd']));

//J'ajoute la vérification de l'user avant insertion (je ne veux pas de doublons d'emails)
if(checkUser($login_, $con)){
    echo "Ce nom d'utilisateur existe déjà";
}else{
    //Je créé ma reqête d'insertion SQL
    $sql_ = "INSERT INTO member (id, user, password_) VALUES ('', '$login_', '$password_')";
    $result = mysqli_query($con, $sql_) or die ("Echec de la requête insert");
    echo "Vos informations ont bien été enregistrées";
}

// Fermeture de connexion
mysqli_close($con);
}

?>
</body>
</html>


