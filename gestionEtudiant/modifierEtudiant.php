<?php
    include("verifier1.php");
    include("verifier2.php");
    include("connexion.php");

    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $nomPhoto = $_FILES['photo']['name'];
    $file_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name, "./images/$nomPhoto");

    // Vérification de la connexion
    if(!$connexion){
        die("La connexion à la vase de données a échoué : " .mysqli_connect_error());
    }

    // Exécution de la requête 
    $req = "update etudiants set nom = '$nom', email = '$email', photo = '$nomPhoto' where code = '$code'";
    $req2 = "update etudiants set nom = '$nom', email = '$email' where code = '$code'";
    if(empty($nomPhoto)){
        $rs = mysqli_query($connexion, $req2);
    }else{
        $rs = mysqli_query($connexion, $req);
    }
    
    

    // Vérifiacation du résultat
    if(!$rs){
        die("Erreur lors de l'éxécution de la requête : " .mysqli_error($connexion));
    }
    header("location:afficherEtudiant.php");


?>