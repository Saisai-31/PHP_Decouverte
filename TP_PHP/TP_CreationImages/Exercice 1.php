<?php
echo "<h2>Créez une image de 500 x 300 pixels avec une couleur de fond rouge. Écrivez un texte de bienvenue en blanc avec une police PHP.<br><br></h2>";

header('image/png');
// Création de l'image
$image = imagecreate(500, 300);

$rouge = imagecolorallocate($image, 255, 0, 0); //Rouge pour le fond
$blanc = imagecolorallocate($image, 255, 255, 255); // Blanc pour le texte

// Remplissage de l'arrière-plan avec la couleur rouge
imagefilledrectangle($image, 0, 0, 499, 299, $rouge);

// Texte à afficher
$texte = "Bienvenue";

// Taille et position du texte
$taillePolice = 15;
$x = 200;
$y = 150; // Position verticale du texte
$police = 1; // La valeur 1 correspond généralement à la police par défaut de GD

// Ajout du texte à l'image
imagestring($image, $taillePolice, $x, $y, $texte, $blanc);

//Enregistre l'image dans le fichier
imagepng($image, "image.png");

// Libération de la mémoire
imagedestroy($image);

?>
<img src="image.png" alt="">






