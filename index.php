<?php

$category = isset($_GET['cat']);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query  = $bdd->query('SELECT * FROM category');
?>

<?php include('./parts/head.php'); ?>

<body data-barba="wrapper">

    <!-- Header added automatically by php -->
    <header>
        <?php include('./parts/header.php'); ?>
    </header>

    <!-- Main content of the page. The best way, use this HTML tag "main" -->
    <h1 class="home-title">Bienvenue sur notre site : Nos adresses gourmandes à Paris!</h1>
    <main id="homepage" data-barba="container" data-barba-namespace="home" data-category="<?= $category ?>">
        <section id="mappy" class="app_view flex flex-center">
            <div id="map"></div>
        </section>
        <aside class="flex flex-column">
            <h3>Qu'est ce qui vous ferez plaisir?</h3>
            <p>Lorem ipsum dolor sit amet elit.</p>
            <ul>
                <?php foreach ($query as $item) : ?>
                    <li class="">
                        <img src="https://via.placeholder.com/300x50" alt="Name of the starred place" width="100%">
                        <a href="index.php?cat=<?= $item['id'] ?>">&rightarrow; <?= $item['name'] ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </aside>
    </main>

    <!-- Footer added automatically by php -->
    <footer>
        <?php include('./parts/footer.php'); ?>
    </footer>
</body>

</html>