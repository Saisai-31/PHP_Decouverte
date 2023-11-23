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
    while($donnees = $rs_req -> fetch()){
        echo '<pre>';
        print_r($donnees);
        echo '</pre>';
     }
    
        
    
?>