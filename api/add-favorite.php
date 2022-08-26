<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$userId = $_POST['userId'];
$placeId =  $_POST['placeId'];


$query  = 'INSERT INTO `favorites` (`fk_user_id`, `fk_place_id`) VALUES (:userId, :placeId)';
$statement = $bdd->prepare($query);

//Bind our values to our parameters (we called them :make and :model).
$statement->bindValue(':userId', $userId);
$statement->bindValue(':placeId', $placeId);

$inserted = $statement->execute();

echo $inserted;
