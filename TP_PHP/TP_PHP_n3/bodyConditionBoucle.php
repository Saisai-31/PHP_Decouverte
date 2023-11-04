<div class="content">
        <h1>TP PHP N3 ex 1 à 8 Les BDD</h1>

	<?php
        echo "Exercice 1, Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.<br>";

        $nombre = 30;
        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "Le nombre est un multiple de 3 et de 5.";
        } else {
            echo "Le nombre n'est pas un multiple de 3 et de 5.";
        }
        echo "<br><br>";


        echo "Exercice 2, Écrivez une expression conditionnelle utilisant les variables \$age et \$sexe dans une instruction if pour sélectionner une personne de sexe féminin dont l’âge est comprisentre 21 et 40 ans et afficher un message de bienvenue approprié. <br>";
        $age = 26;
        $sexe = "femme";
        if($age >= 21 && $age <=40 && $sexe === "femme"){
            echo " Vous êtes la bienvenue.";
        }else{
            echo "Désolé, vous ne fais pas partie de nos critères.";
        }
        echo "<br><br>";


        echo "Exercice 3, Effectuez une suite de tirages de nombres aléatoires jusqu’à obtenir une suite composée d’un nombre pair suivi de deux nombres impairs.  <br>";
        $nombre1 = null;
        $nombre2 = null;
        $nombre3 = null;
        
        while (true) {
            $nombre = rand(1, 100); // Générer un nombre aléatoire entre 1 et 100
        
            if ($nombre % 2 == 0) {
                // Si le nombre est pair, le stocker dans nombre1 et réinitialiser nombre2 et nombre3
                $nombre1 = $nombre;
                $nombre2 = null;
                $nombre3 = null;
            } elseif ($nombre2 === null) {
                // Si le nombre est impair et nombre2 n'a pas encore été défini, le stocker dans nombre2
                $nombre2 = $nombre;
            } elseif ($nombre3 === null) {
                // Si le nombre est impair et nombre3 n'a pas encore été défini, le stocker dans nombre3
                $nombre3 = $nombre;
            }
        
            if ($nombre1 !== null && $nombre2 !== null && $nombre3 !== null) {
                // Si j'ai obtenu la suite souhaitée, sortir de la boucle
                break;
            }
            
        }
        echo "La suite composé est : $nombre1, $nombre2, $nombre3";
        echo "<br><br>";


        echo "Exercice 4, Créez et affichez des numéros d’immatriculation automobile (pour Paris, par exemple) en commençant au numéro 100 PHP 75. Effectuez ensuite la même procédure en mettant en réserve les numéros dont le premier groupe de chiffres est un multiple de 100. Stockez ces numéros particuliers dans un tableau.   <br>";

        $numerosParticuliers = array();

        for ($i = 100; $i <= 999; $i++) {
        $numeroImmatriculation = " " . str_pad($i, 3, '0', STR_PAD_LEFT) . " PHP 75"; // Incrémente le nombre

            if ($i % 100 === 0) {
        $numerosParticuliers[] = $numeroImmatriculation;
            }
            //echo $numeroImmatriculation . "<br>";  
        }

        echo "Numéros particuliers :<br>";
        foreach ($numerosParticuliers as $numero) {
            echo $numero . "<br>";
        }
        echo "<br>";


        echo "Exercice 5, Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et affichez le nombre de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis avec l’instruction for.   <br>";






    ?>

    </div>