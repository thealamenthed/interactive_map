<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet9;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query  = $bdd->query('SELECT * FROM place');
