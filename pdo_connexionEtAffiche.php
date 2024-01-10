<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Se connecter et afficher des informations avec PDO</h1>
    <?php
    echo "Affichage de la table personne dans un tableau assocaitif.<br> ";
    $server = 'mysql:host=localhost;dbname=mabaseauto';
    $user = 'toto';
    $password = 'tata';
    $cnx = new PDO($server, $user, $password);

    try{
        $cnx = new PDO($server, $user, $password);
     }catch(PDOException $e){
        echo "Une erreur est survenue !";
     }

     $sql="select * from personnes";

     $req = $cnx->query($sql);

     while($donnees = $req -> fetch(PDO::FETCH_ASSOC)){
        echo '<pre>';
        print_r($donnees);
        echo '</pre>';
     }

     echo "Affichage de la table telephone dans un tableau numérique.<br> ";
     $sql2="select * from telephone";
     $req2 = $cnx->query($sql2);

     while($donnees2 = $req2 -> fetch(PDO::FETCH_NUM)){
        echo '<pre>';
        print_r($donnees2);
        echo '</pre>';
     }

     // Avec PDO, la fermeture explicite de la connexion n'est pas nécessaire dans la plupart des cas. L'objet PDO gère automatiquement la fermeture de la connexion à la base de données une fois que l'objet n'est plus référencé dans votre script.

      // Cependant, si vous souhaitez explicitement fermer la connexion PDO pour libérer les ressources plus tôt dans votre script, vous pouvez le faire en utilisant la méthode null pour détruire l'objet PDO :

      // $cnx = null;


    
    ?>
</body>
</html>