<?php
     include ('connexion.php');

     $log = htmlspecialchars($_POST['login']);
     $pass = htmlspecialchars($_POST['pass']);

    //$PC = sha2($pass);  //ou md5 au lieu de sha2 pour crypter le mot de passe

    // Exécution de la requête
    $req = "select * from users where LOGIN='$log' and PASSWORD='$pass'";
    $rs = mysqli_query($connexion, $req);

    // Vérification du résultat
    if(!$rs){
       die("Erreur lors de l'exécution de la la requête : ".mysqli_erreor($connexion));
    }

    //Utilisation de mysqli_fetch_assoc pour obtenir les résultats sous forme de tableau associatif
    while($u = mysqli_fetch_assoc($rs)){
        //traitement des résultats ...
        session_start();
        $_SESSION['NIV']=$u['niveau'];
        header("location:afficherEtudiant.php");
    }

    //Fermeture de la connexion
    mysqli_close($connexion);
?>



