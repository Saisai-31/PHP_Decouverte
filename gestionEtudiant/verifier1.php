<?php 
    session_start();
    if(!(isset($_SESSION['NIV']))){
        header("location:index.html");
        exit;
    }
?>