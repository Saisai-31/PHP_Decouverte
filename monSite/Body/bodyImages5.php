<div class="content">
    <h1>Gestion des images : Polygone, 5ème partie</h1>
    
    <?php
     //header("image/jpeg");
     $mypicture2 = imagecreate(800, 400);
     $fond = imagecolorallocate($mypicture2, 255, 255, 51);
     $noir = imagecolorallocate($mypicture2, 255, 0, 0);
     $blanc = imagecolorallocate($mypicture2, 255, 255, 255);

     //Définition de l'épaisseur de trait 
     imagesetthickness($mypicture2, 3);

     //Coordonnées du quadrilatère
     $tab = array(100, 50, 500, 100,750, 300, 50, 350);

     //Tracé du quadrilatère
     imagepolygon($mypicture2, $tab, 4, $noir);

     //Tracé du triangle plein
     imagefilledpolygon($mypicture2, array(150, 80, 500, 150, 250, 310), 3, $blanc);
     imagejpeg($mypicture2, "polygon.jpeg");
     imagedestroy($mypicture2);
     

    ?>
    <img src="polygon.jpeg" alt="">
    
</div>