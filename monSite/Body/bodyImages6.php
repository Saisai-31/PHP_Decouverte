<style>
    .content{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<div class="content">
    <h1>Création des tracés d'arcs, de cercles et d'ellipses : 6ème partie</h1>
    
    <?php
    /*
    Pour tracer des arcs de cercle ou des ellipses, vous disposez de la fonction iamgearc(), dont la syntaxe est la suivante : 
    int imagearc (ressource $idimg, int tXc, int Yc, int Larg, int Haut, int Ang1, int Ang2, int $couleur).
    Les parmètres Xc et Yc sont les coordonnées du centre. Larg et Haut représentent la largeur et la hauteur (égaux pour le cercle). Ang1 et Ang2 sont des angles en degrés qui permenttent d'indiquer la portion du cercle ou d'ellipse qui sera représenté. 
    L'origine des angles est la position horaire 3 heures et le sens positif est horaire. 

    Pour créer des secteurs circulaires ou elliptiques pleins, j'utilise la fonction imagefilledarc (ressource $idimg, int Xc, int Yc, int Larg, int Haut, int Ang1, int Ang2, int $couleur, int style).
    Le paramètre supplémentaire style est une constante entuière qui peut prendre les valeurs suivantes : 
    IMG_ARC_PIE : le sectur est plein et les rayons sont tracés. Vous obtenez un camenbert.
    IMG_ARC_NOFILL : seul le contour est tracé sans les rayons. Dans ce cas, vous utilisez de préférence imagearc(). 

    IMG_ARC_CHORD : les rayons et la corde qui relie les extrémités de l'arc sont tracés et le complément du secteur tracé est rempli. Vous obtenez un triangle isocèle dont je connais l'angle du sommet. 
    Pour tracer des cercles ou des ellipses complets, il est simple d'utiliser la fonction : bool imagefilledellipse (ressource $idimg, int Xc, int Yc, int Larg, int Haut, int Ang1, int Ang2, int $couleur, int style ).
    */

    //header("image/png");
    $idimg = imagecreate(800, 400);
    $fond = imagecolorallocate($idimg, 255, 255, 51);
    $noir = imagecolorallocate($idimg,0, 0, 0);
    $rouge = imagecolorallocate($idimg,255, 0, 0);

    //Tracé d'arc
    imagearc($idimg, 200, 100, 180, 180, 180, 360, $noir);
    imagearc($idimg, 200, 100, 140, 140, 180, 360, $noir);
    imagefilledarc($idimg, 500, 200, 480, 300, 0, 290, $rouge, IMG_ARC_PIE);

    //Tracé d'ellipses
    imageellipse($idimg, 200, 150, 100, 50, $noir);
    imagefilledellipse($idimg, 120, 300, 200, 80, $rouge);
    imagepng($idimg, "cercle.png");
    imagedestroy($idimg);

    ?>
    <img src="cercle.png" alt="">
    
</div>