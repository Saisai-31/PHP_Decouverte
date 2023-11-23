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


?>