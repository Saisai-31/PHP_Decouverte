<div class="content">
    <h1>Gestion des images : 4ème partie</h1>
    
    <?php
     //header("image/gif");
     $mypicture = imagecreate(800, 400);
     $fond = imagecolorallocate($mypicture, 255, 255, 51);
     $rouge = imagecolorallocate($mypicture, 255, 0, 0);

     //Définition de l'épaisseur de trait 
     imagesetthickness($mypicture, 3);

     //Tracé des rectangles
     for($i = 3; $i < 100; $i+=20){
        imagerectangle($mypicture, $i, $i, 800 - $i, 400 - $i, $rouge);
     }

     //Tracé d'un rectangle plein
     imagefilledrectangle($mypicture, 100, 100, 700, 300, $rouge);
     imagegif($mypicture, "rectangles.gif");
     imagedestroy($mypicture);


    ?>
    <img src="rectangles.gif" alt="">
    
</div>