<?php
    try {
        $dns = 'mysql:host=localhost;dbname=lafleurv2';
        $utilisateur = 'root';
        $motDePasse = '';
        $connection = new PDO( $dns, $utilisateur, $motDePasse );
        $connection->query("SET NAMES utf8");
    } 
    catch ( Exception $e ) {
        echo "Connection à MySQL impossible : ", $e->getMessage();
        die();
    }
?>