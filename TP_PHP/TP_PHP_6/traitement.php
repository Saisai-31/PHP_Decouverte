<?php

    if(isset($_POST) &&
    isset($_POST['Nom'], $_POST['Prénom'], $_POST['Adresse'], $_POST['Ville'], $_POST['Code_Postal']) &&
    (Nom !== "" &&
    Prénom !== "" &&
    Adresse !== "" &&
    Ville !== "" &&
    Code_Postal !== "")
    )
    {
        echo '<table border="1">';
        foreach($_POST as $name=>$value){
            echo '<tr>';
            echo '<td>' . $name . '</td>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }else{
       
        echo '<script>alert("Veuillez remplir tous les champs!")</script>';
        
    }
    

?>