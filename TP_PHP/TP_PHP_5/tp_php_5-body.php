<div class="content">

    <h1>TP PHP 5</h1>
 
    <?php
        echo "Exercice 1 : Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge de la personne.<br><br>";

        $personne = array($Zidane = array("Zinedine", "Madrid", 51), $Pholoppe = array("Cyril", "Toulouse", 45), $Marley = array("Bob", "Paradis", 78));

        print_r($personne);

        echo "<br><br>";


        echo "Exercice 2 : Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec une série de valeurs associées.<br><br>";

        $personnes = array(
            "Zidane" => array(
                "Prenom" => "Zinedine",
                "Ville" => "Madrid",
                "Age" => 51
            ),
            "Pholoppe" => array(
                "Prenom" => "Cyril",
                "Ville" => "Toulouse",
                "Age" => 45
            ),
            "Marley" => array(
                "Prenom" => "Bob",
                "Ville" => "Paradis",
                "Age" => 78
            ),
        );

        print_r($personnes)."<br>";

        echo "<br><br>";


        echo "Exercice 3 : Utilisez une boucle foreach pour lire les tableaux des exercices 1 et 2. <br><br>";
        foreach($personnes as $cle=>$valeur){
            echo "Clé $cle : ","<br>";
            foreach($valeur as $ind=>$val){
                echo "Valeur $ind : ", $val, "","<br>";
            }
        }

        echo "<br> 2 ème solutionn toujours avec la boucle foreach mais construite differement, ce qui donne un affichage différent.<br>";


        foreach($personnes as $nom =>$indice){
            echo "Non : ".$nom.", Prénom : ".$indice['Prenom'].", Ville de résidence : ".$indice['Ville'].", Age : ".$indice['Age']." ans.<br>";
            }

        echo "<br><br>";


        echo "Exercice 4 : Utilisez une boucle while pour lire les tableaux des exercices 1 et 2.<br><br>";
        $index = 0;
        //count($personnes)
        while($index < 1){
        print_r($personnes);
        $index++;
        }
        echo "<br><br>";

        echo "Exercice 5 : Créez un tableau contenant une liste d’adresses de sites recommandés, puis créez un lien aléatoire vers le premier site de la liste après avoir trié le tableau en ordre aléatoire.<br>";
        // shuffle — Mélange les éléments d'un tableau
        // Suivant le type de tableau et mes besoin, j'aurais pu utiliser : 
        // array_rand — Prend une ou plusieurs clés, au hasard dans un tableau

        $listeSites = ['www.site1.com', 'www.site2.fr', 'www.site3.org', 'www.site4.net', 'www.site5.th'];
        print_r($listeSites);
        echo "<br>";
        shuffle($listeSites);
        // Je prends le 1er site de la liste après avoir mélagé le tableau aléatoirement
        $siteAleatoire = $listeSites[0];
        // J'affiche le lien vers le site aléatooire
        echo "Le site recommandé est : ".$siteAleatoire."<br><br>";


        echo "Exercice 6 : Créez un tableau d’entiers variant de 1 à 63 puis, à partir de celui-ci, un autre tableau de nombres variant de 0 à 6.3. Créez ensuite un tableau associatif dont les clés X varient de 0 à 6.3 et dont les valeurs sont sin(X). Affichez le tableau de valeurs dans un tableau HTML.<br>";
        //range — Crée un tableau contenant un intervalle d'éléments. start : Première valeur de la séquence. End : dernière valeur possible de la séquence. Step : indique de combien la séquence produite progresse entre les valeurs de la séquence, step peut être négatif pour les séquences décroissantes. Si step est un float sans partie fractionnaire, il est interprété comme un int.
        $tableauEntiers = range(1, 63, 1);
        print_r($tableauEntiers);
        echo "<br><br>";
        //array_map — est une fonction en PHP qui applique une fonction à chaque élément d'un tableau et retourne un nouveau tableau avec les résultats de l'application de cette fonction à chaque élément.
        //function ($num) { return $num / 10; } est une fonction anonyme (ou fonction callback) définie ici à la volée. Elle prend un paramètre $num (chaque élément du tableau $tableauEntiers) et retourne ce nombre divisé par 10.
        //$tableauEntiers est le tableau d'entiers de 1 à 63, issu de la fonction range(1, 63).
        $tableauNombres = array_map(function ($num) {
            return $num / 10;
        }, $tableauEntiers);
        print_r( $tableauNombres);
        echo "<br><br>";
        //Ce code utilise array_map pour appliquer la fonction anonyme à chaque élément du tableau $tableauEntiers. En conséquence, chaque élément du tableau d'entiers est divisé par 10 et le résultat est stocké dans le tableau $tableauNombres. Cela crée un nouveau tableau où chaque nombre du tableau initial est maintenant divisé par 10.

        //Le sinus d'un nombre est une fonction mathématique qui attribue à chaque nombre réel une valeur comprise entre -1 et 1. Cette fonction est périodique et est souvent représentée sous forme de courbe sinusoïdale.
        //array_map('sin', $tableauNombres) : Ici, array_map est utilisé pour appliquer la fonction sin à chaque élément du tableau $tableauNombres. La fonction sin est une fonction mathématique standard en PHP qui calcule le sinus d'un nombre. Elle est appliquée à chaque élément du tableau $tableauNombres.
        //$tableauNombres : Ce tableau contient les nombres de 0 à 6.3 (résultat de la division par 10 des entiers de 1 à 63).
        //array_combine($tableauNombres, array_map('sin', $tableauNombres)) : La fonction array_combine prend deux tableaux en entrée : le premier tableau $tableauNombres est utilisé comme clés et le deuxième tableau (résultat de l'application de sin à chaque élément de $tableauNombres) est utilisé comme valeurs. Cette fonction combine les deux tableaux pour former un tableau associatif où chaque élément de $tableauNombres est associé à son résultat de la fonction sin.
        $tableauSinus = array_combine($tableauNombres, array_map('sin', $tableauNombres));
        //Ainsi, $tableauSinus est un tableau associatif où les clés sont les nombres de 0 à 6.3 et les valeurs sont les résultats de la fonction sinus appliquée à ces nombres.

        //J'affiche  $tableauSinus dans un tableau
        echo '<table border="1">';
        echo '<tr><th>X</th><th>sin(X)</th></tr>';
        foreach ($tableauSinus as $x => $sinX) {
            echo '<tr>';
            echo '<td>' . $x . '</td>';
            echo '<td>' . $sinX . '</td>';
            echo '</tr>';
        }   
        echo '</table>';
        echo "<br><br>";


        echo "Exercice 7 : Créez un tableau contenant une liste d’adresses e-mail. Extrayez le nom de serveur de ces données, puis réalisez des statistiques sur les occurrences de chaque fournisseur
        d’accès.<br>";
        // Tableau contenant une liste d'adresses e-mail
        $listeAdressesEmail = [
        'user1@example.com',
        'user2@gmail.com',
        'user3@hotmail.com',
        'user4@example.com',
        'user5@yahoo.com',
        'user6@gmail.com',
        ];

        // Tableau pour stocker les occurrences des fournisseurs d'accès
        $statistiquesFournisseurs = [];

        // Extraction du nom de serveur pour chaque adresse e-mail
        foreach ($listeAdressesEmail as $adresse) {
            $emailParts = explode('@', $adresse); // explode : divise l'adresse e-mail en deux parties : nom d'utilisateur et nom de domaine
            $serveur = isset($emailParts[1]) ? $emailParts[1] : ''; // Récupère le nom de domaine (le serveur)

        // Stocke et compte les occurrences du nom de domaine
        if (!isset($statistiquesFournisseurs[$serveur])) { // isset — Détermine si une variable est déclarée et est différente de null
            $statistiquesFournisseurs[$serveur] = 1; // Si c'est la première fois qu'on le rencontre, initialisation à 1
        } else {
            $statistiquesFournisseurs[$serveur]++; // Sinon, incrémentation du compteur
        }
        }

        // Affichage des statistiques des fournisseurs d'accès
        echo '<pre>';
        print_r($statistiquesFournisseurs);
        echo '</pre>';











        

    ?>
</div>