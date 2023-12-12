<MAIn>
    <?php 
        session_start();
        echo "<h2>Bienvenue<h/2> ".$_SESSION['name'];


    ?>
    <h2>Vous êtes dans votre espace personnel !</h2>
    <a href="deconnexion.php"><h4>Déconnexion</h4></a>
</MAIn>