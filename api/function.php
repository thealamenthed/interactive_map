<?php

include('data.php');

function getCreation($formCrea)
{
if(isset($_POST['valide'])){
        
        $name = $_POST['name'];
        $img = $_POST['img'];
        $category = $_POST['category'];
        $adresse = $_POST['adress'];
        $latitude = $_POST['lat'];
        $longitude = $_POST['lng'];

    $sql="INSERT INTO `place` (id, category, `name` , img , adress, lat , lng ) VALUES (NULL,'$category', '$name', '$img', '$category','$adresse', '$latitude', '$longitude')";
    
    $bdd = new PDO('mysql:host=localhost;dbname=projet9;charset=utf8', 'root', '');
    $result =  $bdd->query($sql);

    if($result){
      //echo"informations ajoutées avec succès";
      header('location:settings.php');
    }else{
      //die('Erreur : '.$e->getMessage());
    }

}
};

function getByIdDelete($formDelete)
{

if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de ce lieu n'existe pas !");
}
$bdd = new PDO('mysql:host=localhost;dbname=projet9;charset=utf8', 'root', '');
   
$id = $_GET['id'];
$query = $bdd->prepare('SELECT * FROM `place` WHERE `category_id` = $id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
}
$query = $bdd->prepare('DELETE FROM `places` WHERE id = :id');
$query->execute(['id' => $id]);
header("Location: settings.php");
exit();

}


function getModif($formModif)
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet9;charset=utf8', 'root', '');
  
if(isset($_POST['modifier'])  ) {
    $name = $_POST['name'];
    $img = $_POST['img'];
    $category = $_POST['category'];
    $adresse = $_POST['adress'];
    $latitude = $_POST['lat'];
    $longitude = $_POST['lng'];

    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $formUpdateplace = $bdd->query("SELECT * FROM `places` WHERE `id`= $id");
      $ok = $formUpdateplace->fetch();
      }

$sql= "UPDATE articles SET '$category', '$name', '$img', '$category', '$latitude', '$longitude' WHERE id= '$id'";
$results = $bdd->query($sql);
header("location: settings.php");
}

}
