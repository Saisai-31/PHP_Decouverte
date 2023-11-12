<?php
        <?php
        // Connexion à la base de données
        $connexion = smysqli("localhost", "root", "", "contact_cv");
        
        // Vérifier la connexion
        if ($connexion->connect_error) {
            die("Erreur de connexion à la base de données : " . $connexion->connect_error);
        }
        
        // Récupérer les données du formulaire
        // Utilisez isset pour vérifier si la variable existe avant de l'utiliser
        $salutation = isset($_POST['salutation']) ? $_POST['salutation'] : '';
        $nomPrenom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
        $objet = isset($_POST['objet']) ? $_POST['objet'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';
        
        // Préparer la requête SQL sans spécifier la colonne id_contact
        $requete = $connexion->prepare("INSERT INTO utilisateurs (salutation, nomPrenom, email, telephone, objet, message) VALUES (?, ?, ?, ?, ?, ?)");
        
        // Liage des paramètres
        $requete->bind_param("sssss", $salutation, $nomPrenom, $email, $telephone, $objet, $message);

        // Exécution de la requête
        if ($requete->execute()) {
            echo "Formulaire soumis avec succès!";
        } else {
            echo "Erreur lors de la soumission du formulaire : " . $requete->error;
        }
        
        // Fermer la connexion
        $connexion->close();
        ?>
        
    ?>