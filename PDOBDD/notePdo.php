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
*/




?>