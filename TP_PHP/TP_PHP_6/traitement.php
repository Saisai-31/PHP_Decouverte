<?php
    //Création du formulaire avec étape de vérification que les champs existent et soient bien remplis.
    if(isset($_POST) &&
    isset($_POST['Nom'], $_POST['Prénom'], $_POST['Adresse'], $_POST['Ville'], $_POST['Code_Postal']) &&
    ($_POST['Nom'] !== "" &&
    $_POST['Prénom'] !== "" &&
    $_POST['Adresse'] !== "" &&
    $_POST['Ville'] !== "" &&
    $_POST['Code_Postal'] !== "")
    )
    //Si tout est valide après vérification, je charge les information dans un tableau.
    {
        echo '<table border="1">';
        foreach($_POST as $name=>$value){
            echo '<tr>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }else{
    //Sinon après vérification, toutes les conditions ne sont pas remplis, une boite d'alerte apparait.
        echo '<script>alert("Veuillez remplir tous les champs!")</script>';
    }
    

?>