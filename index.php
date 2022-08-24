<?php
include('./parts/head.php');
?>

<body data-barba="wrapper">

    <!-- Header added automatically by php -->
    <header>
        <?php include('./parts/header.php'); ?>
    </header>

    <!-- Main content of the page. The best way, use this HTML tag "main" -->
    <main id="homepage" data-barba="container" data-barba-namespace="home">
        <section id="mappy" class="app_view flex flex-center">
            <div id="map"></div>
        </section>
        <aside class="flex flex-column">
            <h3>Homepage</h3>
            <p>Lorem ipsum dolor sit amet elit.</p>
            <ul>
                <li class="">
                    <img src="https://via.placeholder.com/300x50" alt="Name of the starred place" width="100%">
                    <a href="#">&rightarrow; Page link</a>
                </li>
                <li class="">
                    <img src="https://via.placeholder.com/300x50" alt="Name of the starred place" width="100%">
                    <a href="#">&rightarrow; Page link</a>
                </li>
                <li class="">
                    <img src="https://via.placeholder.com/300x50" alt="Name of the starred place" width="100%">
                    <a href="#">&rightarrow; Page link</a>
                </li>
            </ul>
        </aside>
    </main>

    <!-- Footer added automatically by php -->
    <footer>
        <?php include('./parts/footer.php'); ?>
    </footer>
</body>

</html>