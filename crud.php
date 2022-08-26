<?php
include('api/list.php');

// Formulaire de création //


function creation($formCrea)
{
if(isset($_POST['valide'])){
        
        $name = $_POST['name'];
        $img = $_POST['img'];
        $category = $_POST['category'];
        $adresse = $_POST['adress'];
        $latitude = $_POST['lat'];
        $longitude = $_POST['lng'];

    $sql="INSERT INTO place (id, category, `name` , img , adress, lat , lng ) VALUES (NULL,'$category', '$name', '$img', '$category', '$latitude', '$longitude')";
    
    $bdd = new PDO('mysql:host=localhost;dbname=projet9;charset=utf8', 'root', '');
    $result =  $bdd->query($sql);

    if($result){
      //echo"informations ajoutées avec succès";
      header('location:accueil.php');
    }else{
      //die('Erreur : '.$e->getMessage());
    }

}

?>

 <body>

<!-- Formulaire de création -->!!!
<form action="formcrea.php" method="post" class="row g-3">  
<div class="col-md-4">
<label for="validationDefault01" class="form-label">Le lieu</label>
<input type="text" name="name"  class="form-control" id="validationDefault01" required>
</div>
<div class="col-md-4">
<label for="validationDefault02" class="form-label">Image</label>
<input type="text"  name="img" class="form-control" id="validationDefault02" value="<?php ?>" required>
</div>
<div class="col-md-6">
<label for="validationDefault03" class="form-label">Catégorie</label>
<input type="text" name="category" class="form-control" id="validationDefault03" required>
</div>
<div class="col-md-3">
<label for="validationDefault05" class="form-label">adresse</label>
<!--<input type="text" name="contenu" class="form-control" id="validationDefault05" required>-->
<textarea name="adress" class="form-control" id="validationDefault05" rows="3"></textarea>
</div>
<div class="col-md-3">
<label for="validationDefault05" class="form-label">latitude</label>
<input type="text" name="lat" class="form-control" id="validationDefault05" required>
</div>
<div class="col-md-3">
<label for="validationDefault05" class="form-label">Longitude</label>
<input type="text" name="lng" class="form-control" id="validationDefault05" required>
</div>
<div class="col-12">
<button class="btn btn-primary btn-lg" type="submit" name="valide">Créer l'article</article></button>
</div>
</form>
            <?php
}
//$formCrea()
?>
</div>
</div> -->



<?php
//<!-- formulaire pour effacer -->
function delete($formDelete)
{
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de ce lieu n'existe pas !");
}

$id = $_GET['id'];
$query = $bdd->prepare('SELECT * FROM places WHERE id = :id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
}
$query = $bdd->prepare('DELETE FROM articles WHERE id = :id');
$query->execute(['id' => $id]);
header("Location: accueil.php");
exit();
?>
<body>
<section> <!--formulaire authentification des admins-->
        <form action="delete-admin.php" method="post" style="padding:150px">
            <h2>Formulaire de suppression d'admin</h2>
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $donnees['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" value="<?php echo $donnees['pseudo'];?>" disabled>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $donnees['email'];?>" disabled>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" value="<?php echo $donnees['password'];?>" disabled>
            <button type="submit" name="supprimer">Supprimer</button>
        </form>
</section>
<?php
}
// formulaire pour modifier//

function modif($formModif)
{
if(isset($_POST['modifier'])  ) {
    $id = $_POST['id'];
    $title = $_POST['titre'];
    $img = $_POST['image'];
    $content = $_POST['contenu'];
    $datetime = $_POST['date'];

$sql= "UPDATE articles SET '$title, '$img, '$content', '$datetime' WHERE id= '$id'";
$results = $bdd->query($sql);
header("location:accueil.php");
}
if(isset($_GET['id'])){
$id = $_GET['id'];
$formUpdatearticle = $bdd->query("SELECT * FROM `articles` WHERE `id`= $id");
$ok = $formUpdatearticle->fetch();
}
?>

<?php
}