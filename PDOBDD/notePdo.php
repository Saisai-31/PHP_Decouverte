<?php
/*
    LA CLASSE PDO
    Le rôle de la classe PDO est de servir d'interface d'accès à une base de données, pour mon sote internet. 
    Objectif : 
        - découvrir les fonctionnalités de cette classe PDO.
        - sélectionner, insérer, modifier et supprimer des données.

    Qu'est-ce que PDO ?
    PDO signifie PHP Data Objects. PDO est une extension PHP orientée objetincluse depuis la version 5.1 de PHP dont le rôle est de servir d'interface d'accès à une basse de données.
    L'objet PDO permet donc de communiquer avec une base de données, et ceci peu importe le type de SGBD (MySQL, Oracle, etc...).

    CONNEXION A UNE BASE DE DONNES
    Auparavant, pour me connecter à une base de données, nous uitilisions la fonction mysql_connect().
    Cette connexion est devenue totalement obsolète avec l'arrivée de PHP7. Elle a été remplacée par 2 nouvelles extensions : PDO et Mysqli.

    PDO pour se connecter à une base de données.
    --- Définition des variables de connexion ---
    Nous allons commencer par définir nos variables de connexion :
*/
    $dsn = 'mysql:host=localhost;dbname=maBase';
    $user = 'root';
    $password = '';
/*
    Explication : 
    $dsn : contient le type de la base de données (ici mysql), l'adresse du serveur (ici localhost) ainsi que le nom de la bdd (ici maBase).
    $user : contient le login de la bdd (ici root).
    $password : contient le mot de passe de l connexion (ici aucun).

    --- initialisation de l'objet PDP ---
    Une fois nos variables de connexion définies, nous devons ensuite initialiser l'objet PDO, comme ceci
*/
    $cnx = new PDO($dsn, $user, $password);

/*
    Explication : nous initialisons l'objet PDO et nous le stockons dans une variable nommée $cnx. $cnx contient tous les paramètres de connexion de notre base de données.

    Conclusion :
    Nous venons de créer un objet PDO pour nous connecter à notre base de données mysql.

    Gestion d'une erreur éventuelle de connexion
    Si pour une raison quelconque, une erreur de connexion à la base de donnée survenait, nous allons corriger cette erreur et non la subir. 
    En effet, en cas d'erreur, MySQL renvoie un message d'erreur et ce message peut contenir des donées sensibles.
    exemple : nous allons reprendre nos variablesde connexion a notre base de donéées et nous allons les modifier le login de la variable sur $user et ajouter un mot de passe à notre variable $password, afin de générer une erreur de connexion. 
    Puis nous initialisons l'objet PDO.
*/

$dsn = 'mysql:host=localhost;dbname=maBase';
$user = 'toto';
$password = 'tata';
$cnx = new PDO($dsn, $user, $password);

/*
Ensuite nous lancons la page dans le browser. Nous nous attendons à une erreur puisque le couple user/password n'est pas correct.
Nous pouvons observer une faille sécuriter indéniable. Le couple user/password apparait clairement.
Pour remédier à cela, nous allons utiliser les blocs TRY/CATCH 

*** Le couple TRY/CATCH ***
Le coucle TRY/CATCH va nous permettre de pouvoir gérer une erreur de connexion à la base de données et d'en personaliser le message.

-- Principe de fonctionnement --
TRY va tenter de se connecter à la base de données et si il y a une erreur, CATCH fera en sorte de renvoyer un message d'erreur que nous allons personnaliser. Cette erreur sera déclarée sous la forme d'une exception. 
*/
 try{
    $cnx = new PDO($dsn, $user, $password);
 }catch(PDOException $e){
    echo "Une erreur est survenue !";
 }
/*
Nous relancons la page dans notre navigateur et cette fois, le message d'erreur qui va s'afficher sera le suivant : "Une erreur est survenue !"

Conclusion :
Je viens d'apprendre à me connecter à une base de données en utilisant l'objet PDO de PHP.
nb : En cas de problème, tout ce qui se trouve à l'intérieur du TRY sera stoppé au profit de ce qui se trouve à l'intérieur de CATCH.
Et si tout va bien, alors seulement ce qui se trouve à l'intérieur du TRY sera exécuté.
*/

/*
AFFICHER DES DONNEES AVEC PDO
Ecriture de la requête

$sql = select * from clients;

Exécution de la requête

Pour exécuter cette requête nous récupérons l'objet PDO et nous effectuons une requête query. Nous stockons cette requête dans une variable nommée $rs_req.
 */

 $rs_req = $cnx->query($sql);

 /*
 Nous allons maintenant récupérer les données de notre requête. Pour cela nous utilisons une boucle while ainsi que la méthode fetch().
 On affecte à la variable $données, chaque enregistrement de la table clients. 
 */

 while($donnees = $rs_req -> fetch()){
    echo '<pre>';
    print_($donnees);
    echo '</pre>';
 }
 /*
On obtient chaque ligne de notre table clients, rangée dans un tableau (array) et chaque tableau (array) contient : 
- un tableau associatif
- un tableau numérique

Conclure : 
Par défault, le comportement de PDO est d'envoyer la méthode fetch() avec en retour un tableau associatif et un tableau numérique (ou indice).


** L'association PDO::FETCH_ASSOC
Nous pouvons modifier ce comportement en precisant le type d'association à utiliser. Pour cela, nous allons ajouter la méthode fetch(), le type d'association que nous souhaitons voir apparaitre. Pour faire apparaitre uniquement le résultat sous la forme d'un tableau associatif, nous écrirons ::FETCH_ASSOC, à la méthode fetch().Les :: signifie que c'est une constante.

** L'association PDO::FETCH_NUM
Pour faire apparaitre uniquement le résultat sous la forme d'un tableau numérique (indice), nous écrirons : PDO::NUM, à la méthode fetch().

** L'association PDO::FETCH_BOTH
Par défaut la constante utilisé par PDO est PDO::FETCH_BOTH, qui signifie envoyer les deux tableaux (associatif et numérique).
 
** L'association PDO::FETCH_OBJ
Une quatrième constante peut etre utilisée, PDO::FETCH_OBJ, qui donne en retour un objet. Le code suivant identique au précédent à la différence de l'ajout du type PDO::FETCH_OBJ, à la méthode fetch().
 */
while($donnees = $rs_req -> fetch(PDO::FETCH_OBJ)){
    echo '<pre>';
    print_r($donnees);
    echo '</pre>';
}
/*
Dans la pratique, on utilise le plus souvent les 2 types d'associations : ASSOC et OBJ.

*** Gestion des errreurs SQL
Comme nous l'avons fait à l'initiation de l'objet PDO lors de la mise en place de la connexion à notre base de donnée, nous allons protéger nos requete SQL, en bloquant le code en cas d'erreur, grâce au couple TRY/CATCH.
Pour cela nous allons d'abord définir un attribut à notre variable de connexion à la base de données : $cnx, afin de modifier l'affichage des erreurs.
Cela donnera : 
cnx -> setAttribut(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

a- Les différentes versions d'affichage des erreurs
Il existe 3 types d'affichages des erreurs :
- ERRMODE_SILENT; (affichage par default)
- ERRMODE_WARNING;
- ERRMODE_EXCEPTION;
Nous allons voir les 3 types d'affichages d'erreurs. Nous allons provoquer une erreur SQL en faisant une requete non pas dans la table clients mais dans la table client qui n'existe pas. Notre requete SQL deviendra alors : 
$sql = "SELECT * FROM client";

--- Premier type d'affichage des erreur SQL : ERRMODE_SILENT
ERRMODE_SILENT est le mode d'affichage par default. Ce mode d'affichage affiche une erreur sans en préciser la cause.

    try {
        $cnx = new PDO($dsn, $user, $password);
       $cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); //Ici l'attribut des erreur est défini en mode d'affiche ERRMODE_SILENT
       echo "La connexion s'est bien passé";
    } catch (PDOException $e) {
        echo "Une erreur de connexion est survenue !";
    }

--- Deuxième type d'affichage des erreur SQL : ERRMODE_WARNING
ERRMODE_WARNING permet l'affichage du détail de l'erreur. Ce mode peut etre opportun en cours de développement afin d'identifier rapidement les erreurs eventuelles. Notre code ressemblera à ceci : 
    try {
        $cnx = new PDO($dsn, $user, $password);
       $cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
       echo "La connexion s'est bien passé";
    } catch (PDOException $e) {
        echo "Une erreur de connexion est survenue !";
    }

--- Troisième type d'affichage des erreur SQL : ERRMODE_EXCEPTION
ERRMODE_EXCEPTION permet en cas d'erreur, d'envoyer une exception. Cela nous permet donc de récupérer cette exception au travers du couple TRY/CATCH et ainsi de personaliser le message d'erreur qui apparaitra à l'écran.
    try {
        $cnx = new PDO($dsn, $user, $password);
       $cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       définit en mode d'affichage ERRMODE_EXCEPTION
       echo "La connexion s'est bien passé";
    } catch (PDOException $e) {
        echo "Une erreur de connexion est survenue !";
    }

    Si la requete est exécuté. Si elle fonctionne, le script jouera uniquement le try. Si elle ne fonctionne pas le script ira directement au catch.

    try {
       $rs_req = $cnx->query($sql);
        while($donnees = $rs_req -> fetch(PDO::FETCH_OBJ)){
        echo '<pre>';                                    
        print_r($donnees);                              
        echo '</pre>';
    } catch (PDOException $e) {
        echo "Une erreur de connexion est survenue !";
    }

    Nous venons de voir les bases de la mise en place de la classe PDO.
*/


?>