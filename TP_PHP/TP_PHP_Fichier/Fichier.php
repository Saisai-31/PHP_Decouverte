<?php
    echo " TP1: Lire et Afficher le Contenu d'un Fichier : <br>
    1/ Créez un fichier texte (monTexte.txt) avec du contenu. <br>
    2/ Écrivez un script PHP pour lire et afficher le contenu de ce fichier. <br><br>";

    $file = fopen("monTexte.txt", "w") or die("Impossible d'ouvrir le fichier !");
    $texte = "J'aime la boxe, c'est un sport noble ! Ca nous rend plus humble.";
    fwrite($file, $texte);
    fclose($file);

    // $file = fopen("monTexte.txt", "r") or die("Impossible d'ouvrir le fichier !");
    // $content = fread($file, filesize("monTexte.txt"));
    // fclose($file);
    // echo $content;
    // echo "<br><br><br>";


    echo "TP2 : Copier le Contenu d'un Fichier dans un Nouveau Fichier : <br>
    - Écrivez un script PHP pour copier le contenu du fichier monTexte.txt dans un nouveau fichier copieTexte.txt.<br><br>";

    $file = 'monTexte.txt'; // Chemin du fichier source
    $copieFile = 'copieTexte.txt'; // Chemin du fichier de destination
     
    // Vérifier si le fichier source existe
    if (file_exists($file)) {
        // Lire le contenu du fichier source
        $content = file_get_contents($file);
     
        // Écrire le contenu dans le fichier de destination
        file_put_contents($copieFile, $content);
     
        echo "Le contenu du fichier a été copié avec succès.";
    } else {
        echo "Le fichier source n'existe pas.";
    }
    echo "<br><br><br>";

    echo "TP3: Ajouter du Contenu à un Fichier :<br>
    - Écrivez un script PHP pour ajouter du texte à la fin du fichier monTexte.txt.
    <br><br>";
    $file = fopen("monTexte.txt", "a") or die("Impossible d'ouvrir le fichier !");
    $texte2 = "\nJe vous aime !!!";
    fwrite($file, $texte2);
    fclose($file);

    $file = fopen("monTexte.txt", "r") or die("Impossible d'ouvrir le fichier !");
    $content2 = fread($file, filesize("monTexte.txt"));
    fclose($file);
    echo $content2;


?>