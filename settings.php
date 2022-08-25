
 <body>

<!-- Formulaire de création -->!!!
<form action="index.php" method="post" class="row g-3">  
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
       
        </section>
        <section> <!--formulaire de modification des admins-->
        <form action="accueil.php?id=<?php echo $ok['id'] ?>" method="post" style="padding:150px">
            <h2>Formulaire de modification d'article</h2>
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $ok['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $ok['id'];?>">
            <label for="titre">titre</label>
            <input type="text" name="titre" value="<?php echo $ok['titre'];?>">
            <label for="img">image</label>
            <input type="text" name="email" value="<?php echo $ok['image'];?>">
            <label for="text">contenu</label>
            <input type="contenu" name="password" value="<?php echo $ok['contenu'];?>">
            <label for="date">date</label>
            <input type="date" name="date" value="<?php echo $ok['date'];?>">
            <button type="submit" name="modifier">Modifier</button>
        </form>
</section>
    </main>

    <!-- Footer added automatically by JS -->
    <footer></footer>
</body>
</html>