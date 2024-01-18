<?php
    // Connexion à la base de données
    $connexion = mysqli_connect("localhost", "root", "", "g_sco");

    if(!$connexion){
        die("La connexion à la base de données a échoué : ". mysqli_connect_error());
    }

?>