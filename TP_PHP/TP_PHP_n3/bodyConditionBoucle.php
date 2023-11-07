<div class="content">
        <h1>TP PHP N3 ex 1 à 8 Les BDD</h1>

	<?php
        echo "Exercice 1, Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.<br>";

        $nombre = 30;
        if ($nombre % 3 === 0 && $nombre % 5 === 0) {
            echo "Le nombre $nombre est un multiple de 3 et de 5.";
        } else {
            echo "Le nombre $nombre n'est pas un multiple de 3 et de 5.";
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
            $nombre = rand(1, 100); // Génère un nombre aléatoire entre 1 et 100
        
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
// Alternative
// $compteur = 0;
// do{
//     $x = rand(0,1000);
//     $y= rand(0,1000);
//     $z= rand(1,1000);
//     $compteur++;
//     echo $x, ", ",$y; ", ", $z; "<br>";
// }
// While($x%2==1 OR $y%2==0 OR $z%2==0);
// echo "Résultat obtenu en $compteur tours";


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
// Altenative
// $plaquepart=[];
// for($i=100;$i<=999;$i++){
//     $plaque2=' PHP 75';
//     $plaquefinale=$i.$plaque2;
//     console_log($plaquefinale);
//     if($i%100==0){
//         $plaquepart[]=$plaquefinale;
//     }
// }
// var_dump ($plaquepart);

// Alternative 2
// for ($i = 1; $i <= 6; $i++) { 
//     echo $numImmatriculation . " | ";
//     $parts = explode(" ", $numImmatriculation);
//     $numero = (int)$parts[0];
//     $numero++;
//     $numImmatriculation = $numero . " " . $parts[1] . " " . $parts[2];
// }

// Alternative 3 de Magne
// $initx = 80; //lettre P;
// $initx = 72; //lettre H;
// $initx = 80; //lettre P;
// Bouble imbriqué :
// for($x = $initx; $x<=90; $x++){
//     for($y = $inity; $x<=90; $y++){
//         for($z = $initz; $z<=90; $z++){
//             for($num=100; $num<120; $num+=100){
//                 echo "Numéro = $num ", chr($x), chr($y), chr($z), " 75<br/><br/>";
//             }
//             $initz =65; //On repart de la lettre A pour le 3eme caractere
//         }
//         $initz = 65; //On repart de la A pour le 2eme caractere
//     }
// }
// Conserver les multiples de 100
// for($x = $initx; $x<=90; $x++){
//     for($y = $inity; $x<=90; $y++){
//         for($z = $initz; $z<=90; $z++){
//             for($num=100; $num<1000; $num++){
//                 $tab[]="$num".chr($x). chr($y). chr($z). " 75";
//             }
//             $initz =65;
//         }
//         $initz = 65;
//     }
// }
// print_r($tab)

        echo "<br/><br/>";


        echo "Exercice 5, Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et affichez le nombre de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis avec l’instruction for.   <br>";
        echo "<br>";
        echo "Avec la boucle while : <br",
        $nombreInitial = 456;
        $coups = 0;
        $nombreTire = null;

        while ($nombreTire !== $nombreInitial) {
            $nombreTire = rand(100, 999); 
        }
        echo "Nombre initial : $nombreInitial<br>";
        echo "Nombre de coups nécessaires avec while : $coups";
        echo "<br>";

        echo "Avec la boucle for : <br",
        $nombreInitial = 456;
        $nombreTire = null;

        for ($coups = 0; $nombreTire !== $nombreInitial; $coups++) {
            $nombreTire = rand(100, 999);
        }
        echo "Nombre initial : $nombreInitial<br>";
        echo "Nombre de coups nécessaires avec for : $coups";
        echo "<br>";
        echo "<br>";


        echo "Exercice 6, Créez un tableau dont les indices varient de 11 à 36 et dont les valeurs sont des lettres de A à Z. Lisez ensuite ce tableau avec une boucle for puis une boucle foreach, et affichez les indices et les valeurs (la fonction chr(n) retourne le caractère dont le code ASCII vaut n).  <br>";

        // Je créé un tableau et je le remplie avec des lettres de A à Z
        $tableau = array();
        $indiceMin = 11;
        $indiceMax = 36;
        $lettre = ord('A'); // Convertit la lettre 'A' en son code ASCII

        for ($i = $indiceMin; $i <= $indiceMax; $i++) {
            $tableau[$i] = chr($lettre);
            $lettre++; // Incrémente le code ASCII pour passer à la lettre suivante
        }

        echo "Affichage avec une boucle for :<br>";
        for ($i = $indiceMin; $i <= $indiceMax; $i++) {
            echo "Indice : $i, Valeur : " . $tableau[$i] . "<br>";
        }

        echo "Affichage avec une boucle foreach :<br>";
        foreach ($tableau as $indice => $valeur) {
            echo "Indice : $indice, Valeur : $valeur<br>";
        }
        echo "<br>";

// Alternative :
// $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";        
//         echo "La suite de caractères renseignés est la suivante pour \$table2 : ";
//         for($i=11;$i<=36;$i++){
//             $table2[$i]=substr($alphabet,$i-11,1);
//             echo $table2[$i];
//         }

// Alternative 2 :
// $tableau = array(); // Initialise un tableau vide

// $lettre = 'A'; // Initialise la première lettre à 'A'

// for ($i = 11; $i <= 36; $i++) {
//     $tableau[$i] = $lettre; // Associe l'indice à la lettre actuelle
//     $lettre++; // Passe à la lettre suivante (par exemple, de 'A' à 'B', 'B' à 'C', etc.)
// }

// // Affiche le tableau avec une boucle for
// for ($i = 11; $i <= 36; $i++) {
//     echo "$i : " . $tableau[$i] . " | ";
// }


// echo "<br/><br/>";
// echo "<b>Affiche le tabelau avec les indices et valeurs avec la FONCTION chr()</b><br/>";
// echo '<img src="images/tp_php_n16.png"><br/><br/>';

// $tableau = array(); // Initialise un tableau vide

// for ($i = 11; $i <= 36; $i++) {
//     $tableau[$i] = chr($i + 54); // Utilise chr() pour obtenir les lettres de A à Z
// }

// // Affiche le tableau avec les indices et les valeurs avec la fonction chr()
// foreach ($tableau as $indice => $valeur) {
//     echo "$indice : $valeur";
//     echo " | ";
// }
echo "<br/><br/>";

        echo "Exercice 7, Utilisez une boucle while pour déterminer le premier entier obtenu par tirage aléatoire
        qui soit un multiple d’un nombre donné. Écrivez la variante utilisant la boucle do…while.  <br>";
        echo "<br>";
        echo " Avec le boucle while : <br>";
        $nombreDonne = 7; // Remplacez par le nombre donné de votre choix
        $entierObtenu = null;
        while ($entierObtenu === null || $entierObtenu % $nombreDonne !== 0) {
            $entierObtenu = rand(1, 100);
        }
        echo "Le premier entier obtenu qui est un multiple de $nombreDonne est : $entierObtenu";
        echo "<br>";
        echo "<br>";

        echo " Avec le boucle do...while : <br>";
        $nombreDonne = 7; 
        $entierObtenu = null;
        do {
            $entierObtenu = rand(1, 100);
        } while ($entierObtenu % $nombreDonne !== 0);
        echo "Le premier entier obtenu qui est un multiple de $nombreDonne est : $entierObtenu";
        echo "<br>";
        echo "<br>";

// //Alternative :
// $nbre = 57;
// $compt= 0;
// $x_= rand(0,1000);
// //Boucle while : 
// while($x_%$nbre!=0){
//     $x_= rand(0,1000);
//     $compt++
// }
// echo "$x_ est un multiple de $nbre : Résultat obtenu en $compt coups";
// $compt++;


        echo "Exercice 8, Recherchez le PGCD (plus grand commun diviseur) de deux nombres donnés. Gérez au moyen d’une exception le cas où au moins un des nombres n’est pas entier  <br>";
        // Définition de la fonction PGCD (Plus Grand Commun Diviseur)
        function pgcd($a, $b) {
            // Vérifie si au moins l'un des deux nombres n'est pas un entier
            if (!is_int($a) || !is_int($b)) {
                // Lance une exception avec un message d'erreur approprié
                throw new Exception("Les deux nombres doivent être des entiers.");
            }
            
            // Algorithme d'Euclide pour calculer le PGCD
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            
            // Retourne la valeur absolue du PGCD
            return abs($a);
        }

        try {
            // Définir les deux nombres pour lesquels vous souhaitez calculer le PGCD
            $nombre1 = 48; // Remplacez par le premier nombre
            $nombre2 = 18; // Remplacez par le deuxième nombre
            
            // Appel de la fonction pgcd pour calculer le PGCD
            $pgcd = pgcd($nombre1, $nombre2);
            
            // Affichage du résultat du PGCD
            echo "Le PGCD de $nombre1 et $nombre2 est : $pgcd";
        } catch (Exception $e) {
            // Gestion des exceptions, affiche un message d'erreur en cas de problème
            echo "Erreur : " . $e->getMessage();
        }

    // Alternative :
    // function pgcd($a, $b) {
    //     while ($b != 0) {
    //         $temp = $b;
    //         $b = $a % $b;
    //         $a = $temp;
    //     }
    //     return $a;
    // }
    
    // // Remplacez ces nombres par les nombres pour lesquels vous souhaitez
    // // calculer le PGCD
    // $a = 48; 
    // $b = 18;
    
    // $resultat = pgcd($a, $b);
    
    // echo "Le PGCD de $a et $b est $resultat.";


// Alternative : 
// function pgcd($a, $b){
//     if(($a <= 0) || ($b <= 0))
//     return ("Veuillez entre 2 arguments");
// while($b > 0){
    
// }
// }

// L'algorithme d'Euclide 
// est un algorithme classique utilisé pour calculer le plus grand commun diviseur (PGCD) de deux nombres entiers. Il a été développé par le mathématicien grec Euclide au IIIe siècle avant J.C. L'algorithme d'Euclide repose sur le principe que le PGCD de deux nombres ne change pas si on soustrait le plus petit nombre du plus grand jusqu'à ce que les deux nombres soient égaux.

// Voici comment fonctionne l'algorithme d'Euclide :

// Vous avez deux nombres entiers, que nous appellerons a et b.

// Vous divisez le plus grand de ces deux nombres par le plus petit, et vous obtenez un quotient q et un reste r. La division s'écrit sous la forme : a = b * q + r.

// Si r est égal à zéro, alors b est le PGCD des nombres a et b.

// Si r n'est pas égal à zéro, vous répétez le processus avec b et r à la place de a et b. Cela signifie que a devient b et b devient r. Vous revenez à l'étape 2.

// Vous continuez à répéter les étapes 2 à 4 jusqu'à ce que le reste r soit égal à zéro. À ce moment-là, le PGCD est le dernier non nul reste obtenu.

// L'algorithme d'Euclide est efficace pour calculer le PGCD de deux nombres, et il est utilisé dans de nombreuses applications mathématiques et informatiques, notamment en cryptographie, en arithmétique modulaire et en résolution de problèmes de nombres entiers.

    ?>

    </div>