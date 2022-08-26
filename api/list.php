
<?php 


$cat = isset($_GET['cat']);


try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', '');

} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


$sql = 'SELECT * FROM place';

if (isset($_GET['cat'])) {
    $sql = 'SELECT * FROM place WHERE category_id = ' . $_GET['cat'];
}

$query  = $bdd->query($sql);

header('Content-Type: application/json'); // ce qui va faire comprendre au navigateur que c'est fichier json
echo json_encode($query->fetchAll(), true); // transforme un array en json

