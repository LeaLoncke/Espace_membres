<?php

// Connection to the database
// Fill the name of database, your root and your password

try {
    $bdd = new PDO('mysql:host=localhost;dbname=  ;charset=utf8', '', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

?>
