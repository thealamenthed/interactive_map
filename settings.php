
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
        <form id="formcrea" action="index.php" method="post" style="padding:150px">
            <h2>Formulaire de modification d'article</h2>
            <label id="nom" for="id">ID</label>
            <input id="" type="text" name="idvisible" value="" disabled>

            <input id="" type="hidden" name="id" value="">

            <label id="lieu" for="titre">titre</label>
            <input id="nom" type="text" name="titre" value="">

            <label  id="nom"for="img">image</label>
            <input id="nom" type="text" name="email" value="">

            <label id="nom" for="text">contenu</label>
            <input id="nom" type="contenu" name="" value="">

            <label id="adress" for="adresse">date</label>
            <input id="adresse" type="date" name="date" value="">

            <button type="submit" name="modifier">Modifier</button>
        </form>
</section>
    </main>

    <!-- Footer added automatically by JS -->
    <footer></footer>
</body>
</html>