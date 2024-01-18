<?php
    include("verifier1.php");
    include("verifier2.php");
    include("connexion.php");

    $code = $_GET['code'];
    $req = "delete from etudiants where (CODE=$code)";
    mysqli_query($connexion, $req) or die (mysqli_error());
    header("location:afficherEtudiant.php");

?>