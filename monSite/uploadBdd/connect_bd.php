<?php
    try{
        $db = new PDO('mysql:host=127.0.0.1;dbname=upbdd', 'root', '');
    }catch(PDOException $e){
        die('Erreur : ' .$e->getMessage());
    }


?>