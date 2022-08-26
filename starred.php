<?php
include('./parts/head.php');
try {
    $pdo = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$sql = 'SELECT p.* FROM favorites AS f 
    INNER JOIN place AS p 
    ON p.id = f.fk_place_id
    WHERE f.fk_user_id = :userId;';
$statement = $pdo->prepare($sql);

$result = $statement->execute(['userId' => 1]);

//var_dump($statement->fetchAll());
?>

<body>

    <!-- Header added automatically by JS -->
    <header>
        <?php include('./parts/header.php'); ?>
    </header>

    <!-- Main content of the page. The best way, use this HTML tag "main" -->
    <main id="starred">
        <h1 class="favorite-title">My best places</h1>
        <section class="app_view flex flex-center flex-column">
            <ul class="starred_list flex flex-center flex-wrap">
                <?php foreach ($statement as $item) : ?>
                    <li class="starred_item qsdqsdq">
                        <img src="<?= $item['img']; ?>" alt="Name of the starred place">
                        <h4><?= $item['name']; ?></h4>
                        <p><?= $item['adress']; ?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        </section>
    </main>

    <!-- Footer added automatically by php -->
    <footer class="footer-starred">
        <?php include('./parts/footer.php'); ?>
    </footer>
</body>

</html>