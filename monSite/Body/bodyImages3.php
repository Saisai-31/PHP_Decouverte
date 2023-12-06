<div class="content">
    <h1>Gestion des images : 3ème partie</h1>
    
    <?php
     //header("image/png");
     $monimage = imagecreate(800,400);
     $fond = imagecolorallocate($monimage, 255,255,51);
     $noir = imagecolorallocate($monimage, 0, 0, 0);
     //Définition de l'épaisseur de trait de 2 pixels
     imagesetthickness($monimage, 2);

     //Tracé des droites
     for($x = 0 ; $x < 800; $x+=10){
        imageline($monimage, 400, 399, $x, 0, $noir);
     }
     imagepng($monimage, "rayons.png");
     imagedestroy($monimage);
    ?>
    <img src="rayons.png" alt="">
    
</div>