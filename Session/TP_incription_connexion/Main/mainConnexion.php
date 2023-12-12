
<MAIn> 
<h2>Accéder à votre espace membre</h2>

<?php
    // session_start() est une fonction en PHP qui démarre une session ou restaure la session existante basée sur un identifiant de session passé via un cookie ou une chaîne d'URL. Une session en PHP permet de stocker des variables de session qui sont accessibles à travers différentes pages du site ou de l'application pour un utilisateur spécifique.
    session_start();

    // Je transforme tous les noms de user en minuscule
    // @ est un opérateur d'erreur de PHP. Lorsqu'il est placé devant une expression, il indique à PHP de supprimer l'affichage des messages d'erreur qui pourraient être générés par cette expression.
    @$login = strtolower($_POST['login']);
    @$password = htmlspecialchars($_POST['pwd']);
    @$validate = htmlspecialchars($_POST['valid']);
    $error = "";

    function connectDb(){

        $connexion = mysqli_connect("localhost", "root", "", "membership");

        if(mysqli_connect_errno()){
            echo "erreur de connexion à la base ".mysqli_connect_error();
            exit();
        }
        return $connexion;
    }
    $con = connectDb();

    $dblogin = "SELECT user, password_ FROM member WHERE user LIKE '$login'";
    $result = mysqli_query($con,$dblogin) or die("Échec de la récupération du mot de passe");
    $row = mysqli_fetch_row($result);
    if(isset($validate)){
        // Je ne veux pas de champs vide
        if($login == "" || $password == ""){
            $error = "<h5>Veuillez renseigner tout les champs !</h5>";
        }
        // Je vais récupérer le l'user (index 0) avec son mot de passe (index 1) dans la base donnée
        elseif($login == $row[0] && MD5($password) == $row[1]){
            $_SESSION["Se connecter"]="Yes";
            header("location:membre.php");
        }else{
            $error = "<h5>Mauvais non d'utilisateur ou mauvais mot e passe !</h5>";
        }
    }
    // Je vais récupérer le nom de l'user pour pouvoir l'afficher sur la page membre lorsqu'il se connecte
    // Ce code essaie de stocker la valeur de $row[0] dans la variable de session $_SESSION['name'], tout en supprimant les messages d'erreur éventuels liés à cette opération.
    @$_SESSION['name'] = $row[0];
    mysqli_close($con);
?>

    <form action="" method="POST">
        <div class="label">Votre nom d'utilisateur</div>
        <input type="text" name="login" value="<?php echo $login;?>">
        <br>

        <div class="label">Votre mot de passe</div>
        <input type="password" name="pwd" value="">
        <br>

        <input type="submit" name="valid" value="Valider">
        <br>
        <a href="inscription.php">Créer votre compte</a>
    </form>

    <!-- if(!empty($error)) est une condition qui vérifie si la variable $error n'est pas vide. !empty() est une fonction PHP qui vérifie si une variable existe et n'est pas vide. -->
    <?php if(!empty($error)){?>

    <div id="error"><?=$error?></div>
    <?php } ?>
</MAIn>
