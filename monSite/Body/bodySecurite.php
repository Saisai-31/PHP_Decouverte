<div class="content">
    <h1>Sécurité</h1>
    <br><br>

    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="motdepasse" placeholder="Mot de passe">
        <input type="submit" value="Envoyer">
    </form>

    <!-- 
    Une des vulnérabilités le plus courament identifiées lors des audits en test d'intrusion d'application web est l'injection de code indirect à distance ou Cross Scripting ou XXS.
    Cette vulnérabilité est aussi présente dans le top 10 des risques les plus critiques pour la sécurité des applications web de l'Open Web Application Security Projet (OWASP).

    -->

    <?php
    //Vérification des données
    if(!isset($_POST['nom']) || empty($_POST['nom'])){
        echo "Le nom est obligatoire";
        exit();
    }
    if(!isset($_POST['prenom']) || empty($_POST['prenom'])){
        echo "Le prénom est obligatoire";
        exit();
    }
    if(!isset($_POST['email']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo "L'email' est obligatoire";
        exit();
    }
    if(!isset($_POST['motdepasse']) || empty($_POST['motdepasse'])){
        echo "Le mot de passe est obligatoire";
        exit();
    }

    //Echapement des données
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $motdepasse = htmlspecialchars($_POST['motdepasse']);

    //Connexion à la base de donnée
    $dsn = 'mysql:host=localhost;dbname=secubdd';
    $user = 'root';
    $pwd = "";

    try{
        $pdo = new PDO($dsn, $user, $pwd);
    }catch(PDOException $e){
        echo 'Erreur de la connexion à la base de données : ' .$e -> getMessage();
        exit();
    }

    //Insertion des données dans la BDD
    $sql = 'INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES (?,?,?,?)';
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute([$nom, $prenom, $email, $motdepasse]);

    //Affichage d'un message du succès
    echo "Vos données ont été enreegistrées avec succès !";


    ?>
</div>


    