<div class="content">
        <h1>Rechercher dans une BDD</h1>
        <br><br>
        <form action="" method="post">
            Rechercher un nom : <input type="text" name="recherche">
            <input type="submit" value="Rechercher"><br><br><br>

        </form>









    <?php
    //Pour commencer on se connecte à la base de données

    $bd_server = 'localhost'; //Adresse du serveur MySQL
    $db_user = 'root'; //Nom de l'utilisateur
    $db_user_pass = ""; //Mot de passe
    $db_name = "casse2"; //Nom de la base de données

    //J'ouvre une connexion au serveur MySQL
    $con = mysqli_connect($bd_server, $db_user, $db_user_pass, $db_name);

    //Je récupère la recherche
    $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

    //J'écris la requêtte sql
    $q = $con->query(
    "select nom, age, ville from personne
    where nom like '%$recherche%' or ville like '%$recherche%'
    limit 12");

    //J'affiche le résultat
    while($r = mysqli_fetch_array($q)){
        echo 'Résultat de la recherche : ' .$r['nom'].', '.$r['ville'].'<br>';
    }

    ?>
    


    </div>


    