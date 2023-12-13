<MAIn>
    <?php 
        //session_start() est une fonction en PHP qui démarre une session ou restaure la session existante basée sur un identifiant de session passé via un cookie ou une chaîne d'URL. Une session en PHP permet de stocker des variables de session qui sont accessibles à travers différentes pages du site ou de l'application pour un utilisateur spécifique.
        session_start();

        if(!empty($_SESSION['name'])){
        echo "<h2>Bienvenue ".ucfirst($_SESSION['name'])."</h2>";
        echo "<h2>Vous êtes dans votre espace personnel !</h2>";
        echo'<button><a href="deconnexion.php">Déconnexion</a></button>';
        }else{
            echo "<h4>Merci de vous identifier pour accéder à votre espace personnel</h4> </ br>";
            echo '<button><a href="connexion.php"><h5>Connection</h5></a></button>';
        }
    ?>    
</MAIn>