<MAIN>
    <h2>Créez votre compte utilisateur</h2>

    <form action="" method="POST">
        <div class="label">Entrez votre nom d'utilisateur</div>
        <input type="text" name="createUser" value="">
        <br>
        <div class="label">Entrez votre mot de passe</div>
        <input type="password" name="createPwd" value="">
        <br>
        <div class="label">Confirmer votre mot de passe</div>
        <input type="password" name="createPwd2" value="">
        <br>
        <input class="valider" type="submit" name="createLogin" value="Valider">
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

    // Retourne true si le user en paramètre existe dans la base de données
    // Sinon retourne false si le user en paramètre n'existe pas dans la base de donnée
    function checkUser($login_, $db){
    // verifier que le user soit rempli
    if($login_ !== ""){
    // verifier que le user n'existe pas dans la BDD:
        $myRequest = "select user from member where user like '$login_';";
        $result = $db->query($myRequest);
        if($r = mysqli_fetch_array($result)){
            // echo 'Résultat de la recherche : ' .$r['id_contact'].'<br>';
            return true;
        }else{
            return false;
        }
    }
    // si le user est vide : 
    return false;
    }
    // Je vérifie également que les clés (createPwd et createPwd) sont bien présentes.
    // A la fin je vérifie que les cléescreatePwd et createPwd ne sont pas vide.
    if(
    isset($_POST) &&
    isset($_POST['createUser'], $_POST['createPwd'], $_POST['createPwd2']) &&
    trim($_POST['createUser']) !== "" && 
    trim($_POST['createPwd']) !== "" &&
    trim($_POST['createPwd2']) !== "")
    {
    // J'appel ma fonction pour me connecter à la BDD
    $con = connectDb();

    // Création des variables pour récupérer les données de mes champs du formulaire
    // htmlspecialchars pour se protéger des injections sql
    // MD5 pour hacher (crypter) le mot de passe
    // @ est un opérateur d'erreur de PHP. Lorsqu'il est placé devant une expression, il indique à PHP de supprimer l'affichage des messages d'erreur qui pourraient être générés par cette expression.
    @$login_ = htmlspecialchars (strtolower($_POST['createUser']));
    @$password_ = MD5(htmlspecialchars($_POST['createPwd']));
    @$password2_ = MD5(htmlspecialchars($_POST['createPwd2']));

    // J'ajoute la vérification de l'user avant insertion (je ne veux pas de doublons d'emails), et la vérification de mot de passe.
    if(checkUser($login_, $con)){
        echo "<h5>Ce nom d'utilisateur existe déjà</h5>";
    }elseif($password_!==$password2_){
        echo "<h5>Vous n'avez pas renseigné 2 mots de passe identiques</h5>";
    }else{
        // Je créé ma reqête d'insertion SQL
        $sql_ = "INSERT INTO member (id, user, password_) VALUES ('', '$login_', '$password_')";
        $result = mysqli_query($con, $sql_) or die ("Echec de la requête insert");
        echo "<h5>Vos informations ont bien été enregistrées</h5>";
    }

    // Fermeture de connexion
    mysqli_close($con);
    }else{
    echo "<h5>Veuiller renseigner tout les champs !</h5>";
    }

?>
    <button><a href="connexion.php">Retour à la connexion</a></button>
</MAIN>


