<?php
    include ('connexion.php');

    $nom = htmlspecialchars($_POST['nom']);
    $email =  htmlspecialchars($_POST['email']);
    $nomPhoto = $_FILES['photo']['name'];
    $file_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name, "./images/$nomPhoto");

    // Exécution de la requête sql
    $req= "insert into etudiants (nom, email, photo) VALUES ('$nom', '$email', '$nomPhoto')";
    $rs = mysqli_query($connexion, $req);

    // Vérification des résultats
    if(!$rs){
        die("Erreur lors de l'exécution de la requête : " . mysqli_error($connexion));
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <td>: Nom</td>
                <td><?php echo($nom); ?></td>
            </tr>
            <tr>
                <td>: Email</td>
                <td><?php echo($email); ?></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><img src="images/"><?php echo ($nomPhoto);?></td>
            </tr>
        </table>
        <a href="afficherEtudiant.php">Afficher les étudiants</a>
        
    </body>
    </html>


