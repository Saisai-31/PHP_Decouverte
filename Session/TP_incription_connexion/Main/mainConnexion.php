
<MAIn> 
<h2>Accéder à votre espace membre</h2>

<?php
session_start();
@$login = $_POST['login'];
@$password = $_POST['pwd'];
@$validate = $_POST['valid'];
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
    if($login == $row[0] && MD5($password) == $row[1]){
        $_SESSION["Se connecter"]="Yes";
        header("location:membre.php");
    }else{
        $error = "Mauvais nom d'utilisateur ou mauvais mot de passe";
    }
}
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

<?php if(!empty($error)){
?>
<div id="error"><?=$error?>
</div>
<?php } ?>
</MAIn>
