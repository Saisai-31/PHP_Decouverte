<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL (habituellement localhost)
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$baseDeDonnees = "mbdd"; // Nom de la base de données

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion : " . $connexion->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
    // Le suis maintenant connecté à la base de données
}

// Sélection des utilisateurs depuis la table "utilisateurs"
$resultat = $connexion->query("SELECT * FROM utilisateurs");

if ($resultat->num_rows > 0) {
    echo "<ul>";
    // Affichage des utilisateurs sous forme de liste
    while ($row = $resultat->fetch_assoc()) {
        echo "<li>" . $row["prenom"] . " " . $row["nom"] . " : " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun utilisateur trouvé dans la base de données.";
}

// Fermer la connexion 
$connexion->close();
?>