<?php 

try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query  = $bdd->query('SELECT * FROM place');

header('Content-Type: application/json'); // ce qui va faire comprendre au navigateur que c'est fichier json
echo json_encode($query->fetchAll(), true); // transforme un array en json

?>