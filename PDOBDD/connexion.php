<?php
    $dsn = 'mysql:host=localhost;dbname=maBase';
    $user = 'root';
    $password = '';

    try {
        $cnx = new PDO($dsn, $user, $password);
        echo "La connexion s'est bien passé";
    } catch (PDOException $e) {
        echo "Une erreur de connexion est survenue !";
    }

    $sql = "select * from clients";
    $rs_req = $cnx->query($sql);
    while($donnees = $rs_req -> fetch(PDO::FETCH_ASSOC)){ //PDO::FETCH_NUM affiche un tableau en numérique, à indice et 
        echo '<pre>';                                    //PDO::FETCH_ASSOC affiche un tableau 'association
        print_r($donnees);
        echo '</pre>';
     }
    
        
    
?>