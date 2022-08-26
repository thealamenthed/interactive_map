

<?phpif (!isset($_SESSION['user'])) {
    header('location: account.php');
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$query  = $bdd->query('SELECT * FROM place');

?>
<?php include('./parts/head.php'); ?>
<body>

    <!-- Header added automatically by php -->
    <header>
        <?php include('./parts/header.php'); ?>
    </header>




    <!-- Main content of the page. The best way, use this HTML tag "main" -->
    <main>
    <div class="container">

<div class="row">
    <div class="col-lg-12">
        <h2 class=""> Mes recettes</h2>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">categorie</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($query as $item) : ?>
            <tr>
                <th scope="row"><?= $item['id'] ?></th>
                <td><?= $item['name'] ?></td>
                <td><?= $item['adress'] ?></td>
                <td><?= $item['img'] ?></td>
                <td>
                    <a href="recipe-edit.php?id=<?= $item['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                    <a href="recipe-delete.php?id=<?= $item['id'] ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>

    </main>




    <!-- Footer added automatically by php -->
    <footer>
        <?php include('./parts/footer.php'); ?>
    </footer>
</body>
</html>
