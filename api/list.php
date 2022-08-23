<?php 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query  = $bdd->query('SELECT * FROM place');

header('Content-Type: application/json');
echo json_encode($query->fetchAll(), true);

?>