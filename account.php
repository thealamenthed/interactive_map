<?php
include('./parts/head.php');
?>

<body>





    <!-- Main content of the page. The best way, use this HTML tag "main" -->
    <main>

        <body class="login">


            <div class="container" id="container">
                <div class="form-container log-in-container">
                    <form method="POST" action="login.php">
                        <a href="index.php"><img class="logo-img" src="./assets/img/logo.png" alt="logo"></a>
                        <input type="text" id="user_name" name="user_name" class="form-control" placeholder="nom" />
                        <input type="email" id="email" name="email" class="form-control" placeholder="email" />
                        <input type="password" id="form2Example22" name="password" class="form-control" placeholder="mot de passe" />
                        <!-- <a href="#">Forgot your password?</a> -->

                        <!-- si le paramètre (url) login existe, et qu'il est égale a already alors affiche moi echo -->
                        <?php
                        if (isset($_GET['login_err']) && $_GET['login_err'] === 'already') {
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                        ?>

                        <button type="submit" class="btn-login">Connexion</button>
                    </form>
                </div>
                <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right">
                            <h1 class="connexion-title">Yummy Bakery</h1>
                            <p>The best places to eat!</p>
                        </div>
                    </div>
                </div>
            </div>

    </main>

</body>

</html>