<?php
    echo "<h2>Créez une image de 400 x 200 pixels avec un fond transparent. Dessinez une suite de rectangles emboîtés de couleurs différentes</h2>.<br><br>";

    header('image/png');
    // Création de l'image
    $image2 = imagecreate(400, 200);

    $blanc = imagecolorallocate($image2, 255, 255, 255); // Blanc pour le fond
    $rouge = imagecolorallocate($image2, 255, 0, 0);
    $vert = imagecolorallocate($image2, 255, 0, 0);

    imagesetthickness($image2, 3);

    for($i = 3; $i < 100; $i+=20){
        imagerectangle($image2, $i, $i, 800 - $i, 400 - $i, $rouge);
    }
    imagefilledrectangle($image2, 100, 100, 700, 300, $rouge);
    imagepng($image2, "image2.png");

    imagedestroy($image2);
?>

<img src="image2.png" alt="">

