<?php 

include('data.php');
include('function.php');

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet9;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// function queryMysql($query){
//     global $bdd;
//     return $bdd->query($query);
// }

$query  = $bdd->query('SELECT * FROM place');
// echo( json_encode($query) );

header('Content-Type: application/json'); // ce qui va faire comprendre au navigateur que c'est fichier json
echo json_encode($query->fetchAll(), true); // transforme un array en json
// function getCreation($formCrea){

// };

// function getByIdDelete($formDelete){

// };
// function getModif($formCrea)
// {

// };
?>