<?php
    //Créer et écrire : j'utilise fopen avec le mode d'écriture ("w") et fwrite pour insérer du texte.
    $file = fopen("nouveau.txt", "w") or die("Impossible d'ouvrir le fichier !");
    $texte = "J'aime la boxe, c'est un sport noble ! Ca nous rend plus humble. Mais aussi plus fort mentalement.";
    fwrite($file, $texte);
    fclose($file);

    //Ajouter du contenu à un fichier sans effacer le contenu existant : j'utilise le mode append ("a").
    $file = fopen("nouveau.txt", "a") or die("Impossible d'ouvrir le fichier !");
    $texte2 = "\nJe vous aime !!!";
    fwrite($file, $texte2);
    fclose($file);

    //LECTURE du contenu avec la fonction open() pour l'ouvrir et fread() pour le lire, r signifie en mode lecture.
    //  $file = fopen("nouveau.txt", "r") or die("Impossible d'ouvrir le fichier !");
    //  $content2 = fread($file, filesize("nouveau.txt"));
    //  fclose($file);

    // echo $content2;

    //Lire ligne par ligne le fichier, j'utilise fgets pour lire une ligne à la fois
    $file = fopen("nouveau.txt", "r") or die("Impossible d'ouvrir le fichier !");
    while(!feof($file)){
        $ligne = fgets($file);
        echo $ligne. "<br>";
    }
    fclose($file);

    //Supprimer un fichier, j'utilise la fonction unlink.
    $file = "nouveau.txt";
    if(unlink($file)){
        echo "Le fichier $file a été supprimé avec succès.";
    }else{
        echo "Impossible de supprimer le fichier $file.";
    };

    // Copier le Contenu d'un Fichier dans un Nouveau Fichier 
    // $file = 'monTexte.txt'; // Chemin du fichier source
    //  $copieFile = 'copieTexte.txt'; // Chemin du fichier de destination
     
    //  // Vérifier si le fichier source existe
    //  if (file_exists($file)) {
    //      // Lire le contenu du fichier source
    //      $content = file_get_contents($file);
     
    //      // Écrire le contenu dans le fichier de destination
    //      file_put_contents($copieFile, $content);
     
    //      echo "Le contenu du fichier a été copié avec succès.";
    //  } else {
    //      echo "Le fichier source n'existe pas.";
    //  }








?>