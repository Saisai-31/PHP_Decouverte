<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Créer un nouvel utilisateur en utilisant PDO en lui donnant tout les droits pour une base de données précise</h1>
    <?php
        $server = 'mysql:host=localhost';
        $user = 'root';
        $password = '';
        $cnx = new PDO($server, $user, $password);
    
        try{
            $cnx = new PDO($server, $user, $password);
         }catch(PDOException $e){
            echo "Une erreur est survenue !";
         }

         $sql="create user 'lolo'@'localhost' IDENTIFIED BY 'lala'"; 
         $sql2="grant all  on mabaseauto.* to 'lolo'@'localhost'";

         try{
            //Exécution des requêtes
            $cnx->exec($sql);
            $cnx->exec($sql2);
            echo "L'utilisateur lolo a été créé avec tous les privilèges sur la base de données mabaseauto.";
         } catch (PDOException $e) {
            echo "Une erreur est survenue lors de la création de l'utisateur : ". $e->getMessage();
         }


        // Avec PDO, la fermeture explicite de la connexion n'est pas nécessaire dans la plupart des cas. L'objet PDO gère automatiquement la fermeture de la connexion à la base de données une fois que l'objet n'est plus référencé dans votre script.

        // Cependant, si vous souhaitez explicitement fermer la connexion PDO pour libérer les ressources plus tôt dans votre script, vous pouvez le faire en utilisant la méthode null pour détruire l'objet PDO :

        // $cnx = null;

    ?>
    
</body>
</html>