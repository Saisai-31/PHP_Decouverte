<?php
echo "<h2>Créez une image de 400 x 200 pixels avec un fond transparent. Dessinez une suite de rectangles emboîtés de couleurs différentes</h2>.<br><br>";

header('image/png');
// Création de l'image
$image = imagecreate(400, 200);

$blanc = imagecolorallocate($image, 255, 255, 255, 0.5); // Blanc pour le fond

?>