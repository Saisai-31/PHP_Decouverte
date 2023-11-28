<?php
    $dsn = 'mysql:host=localhost;dbname=maBase';
    $user = 'root';
    $password = '';

    try {
        $cnx = new PDO($dsn, $user, $password);
        $cnx -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "La connexion s'est bien passé<br>";
    } catch (PDOException $e) {
        echo "Une erreur de connexion est survenue !<br>";
    }
    "<br>";
    $sql = "select * from client";//erreur volontaire, j'ai enlevé le s à client
    try{
    $rs_req = $cnx->query($sql);
    while($donnees = $rs_req -> fetch(PDO::FETCH_OBJ)){ //PDO::FETCH_NUM affiche un tableau en numérique, à indice et 
        echo '<pre>';                                    //PDO::FETCH_ASSOC affiche un tableau 'association
        print_r($donnees);                               //avec :: c'est une constante
        echo '</pre>';                                   //PDO::FETCH_OBJ affiche les infos sous forme d'objet
     }
    }catch (PDOException $e) {
        echo "Un problème est survenue !<br>";
    }
?>

