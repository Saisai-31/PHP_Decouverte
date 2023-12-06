<div class="content">
    <h1>Gestion des images</h1>
    
    <?php
        /*
        PHP persmet non seulement de créer des pages contenant du texte affiché dynamiquement mais également des images dynamiques en fonctions des besoins. Il est question ici de voir comment créer des images au format gif, jpeg, png et même wbmp à destination des terminaux mobiles.
        PHP est livré avec l'extension DG (Graphic Device). La version actuelle, livrée vous permet de créer des images au formats cités plus haut.
        */
        
        //echo phpinfo();

        /*
        Sur le serveur local installé par WampServer, Xampp ou Mamp, l'extension GD est installé par défaut. Sur un serveur sur lequel elle ne serait pas disponible, vous décommenté la ligne suivante en supprimant le point virgule au début de la ligne :
        extension = php_gd2.dll
        Cette ligne se trouve dans le fichier php.ini

        Les scripts de création d'images doivent suivrent les étapes suivantes : 
        1/ Envoi d'un entête pécisant le type d'image qui sera envoyé du serveur vers le navigateur. On trouve aussi la fonction header() sous la forme suivante pour une image de type png :
            header("Content-type:image/png");

        2/ Création du cadre de l'image dans lequel vont être tracés les éléments de l'image en appelant la fonction imagecreate(), qui définit les dimensions de l'image en pixels et réserve l'espace mémoire nécesaire sur le serveur. 

        3/ Création des couleurs qui vont être utilisées pour effectuer les tracés en utilisant les codes décimaux de couleur RGB (red, green, blue) à l'aide de la fonction imagecolorallocate().

        4/ Tracé des formes géométriques dans le cadre. Les formes disponibles sont variées. 

        5/ Ecriture du texte dans l'image à l'aide des polices incoporées ou de police TrueTYpe ou FreeRType.

        6/ Envoi de l'image créee vers le navigateur ou dans un fichier image enregistré sur le serveur et utilisable dans n'importe quel page ou image au moyen de l'élément HTML <img>.
        
        7/ Libération facultative de l'espace mémoire occupé par l'image sur le serveur à l'aide de la fonction imagedestroy().
        */

        //header("image.png");

        //Création du cadre 800x400 pixels
        $id_img = imagecreate(800,400);
        //Création des couleurs

        $fond = imagecolorallocate($id_img, 255, 255, 51);
        $noir = imagecolorallocate($id_img, 0, 0, 0);

        //Trace des formes

        //Enregistre l'image dans le fichier
        imagepng($id_img, "imagedwwm.png");

        //Envoi de l'image au navigateur
        //imagepng($id_img);

        //Libération de l'espace mémoire
        imagedestroy($id_img);

    ?>
    <img src="imagedwwm.png" alt="">
</div>