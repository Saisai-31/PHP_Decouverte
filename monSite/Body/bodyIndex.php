<div class="content">
        <h1>Découverte des variables</h1>
    <?php
    echo "J'utilise echo pour afficher :";
    echo "<br>";
    echo "<br>";
    echo "Paul"; //j'affiche le prénom
    echo "<br>"; //je saute une ligne
    echo "Polochon"; // j'affiche le nom
    #Ceci est un commentare
    echo "<br> Paul Polochon"; 
    /* Les commentaires m'aideront lorsque je reviendrais
    dans 6 mois et que j'aurais tout oublié*/
    echo "<br> Super";
    echo "<br>";
    echo 'J\'écris à l\'encre de chine';
    /* Le caractère anti-slash précède le 2ème apostrophe qui échappe ainsi à sa fontion naturelle qui est d'entourer
    des chaines de caractères. Dans le code ici, on met les guillemets au début et à la fin et il n'est pas nécessaire 
    d'échapper l'apostrophe. Par contre il faut échapper les guillemets du prénom*/
    echo "<br> J'envoi des lettres à \"ma dulcinée\"";

    echo "<br><br>.........................................<br><br>";

    /*
    Les variables
    Une variable est un conteneur d'une donnée unique, c'est à dire une boite à chaussure qui ne contient qu'une seule chaussure
    Une variable contient une information temporaire qui peut être numérique, de typa alphabétique (chaine de caractère), 
    de type date, te type objet ou d'autres types.
    Le nom de la variable doit commencer par le caractere $ suivi d'une lettre ou signe_ et ne doit jamais commencer par un chiffre.
    Le signe = sert donc à affacter une valeur à la variable, il s'agit d'un opérateur d'affectation et non le signé égal que l'on utillise
    dans une opération de calcul.
    */
    echo "J'utilise $ pour créer et appeler une varible et echo l'afficher :";
    echo "<br>";
    $largeur = 5;
    echo "<br>";
    echo $largeur;
    $prenom = "Saïsaï";
    $nom = "Lunique";
    $prenom_nom = $prenom." ".$nom;
    echo "<br>".$prenom_nom;

    echo "<br><br>.........................................<br><br>";

    /**
     * Fonctions qui s'appliquent aux variables
     * 
     * strlen(variable): renvoie la longueur d'une chaine de caractère.
     * substr(variable, debut, longueur) : renvoie une partie de la chaine de caracteres.
     * trim(variable) : supprime les espaces (ou d'autres caracteres) en début et fin de cahine.
     * number_format(variable, "nombre de décimal", "on choisit , ou . comme séparateur de décimale", "espace pour les milliers").
     * round(variable, nombre de décimale) : arrondit le nombre.
     */
     echo "J'utilise des fonctions : strlen, substr, trim, number_format et round :";
     echo "<br>";
     $nom2 = " Marie ROSE ";
     echo "<br>";
     echo strlen($nom2);
     echo "<br>";
     var_dump($nom2); //Affiche string (10) "Marie ROSE"
     echo "<br>";
     echo trim($nom2); //Affiche Marie ROSE sans espace avant et apres
     echo "<br>";
     echo substr($nom2, 3, 5); //Affiche rie R
     echo "<br>";
     echo $prix = 2050900.7854;
     echo "<br>";
     echo number_format($prix, 2,".", " "); // Affiche 2 050 900.79 en placant 2 décimales aprèsla virgule,  on choisit , ou . comme séparateur de décimale et un espace comme séparateur de millier
     echo "<br>";
     echo round($prix, 1); //Arrondit à 1 décimale

     echo "<br><br>.........................................<br><br>";

    //Affectation de variable par valeur ou pas alias
    /**
     * Lorsqu'on affecte une donnée dans une variable, on dit qu'on affecte la variable par valeur. Toutefois, on pourrait 
     * aussi créer un alias à une autre variable. On dit parfois qu'on affecte la variable par référence. 
     * Pour créer un alias vers une autre variable, on utilise le signe & (et commercial ou perpluette).
     * 
     */

     echo"Affectation de variable par valeur ou pas alias";
     echo "<br>";
     echo "<br>";
     $v1 = "Jacques Chirac";
     $alias = &$v1; // Créé un alias vers $v1
     $alias = "Mon nom est $alias";
     echo $alias;

     echo "<br>";
     $prenom2 = "Alain";
     echo "Salut les gens, mon nom est : ".$prenom2;
     
    ?>
    </div>