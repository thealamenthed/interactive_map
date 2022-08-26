<?php
session_start();
// Démarrage de la session

try {
    $bdd = new PDO('mysql:host=localhost;dbname=project9;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// On inclut la connexion à la base de données

if (!empty($_POST['user_name']) &&  !empty($_POST['email']) && !empty($_POST['password']))
// Si il existe les champs email, password et qu'il sont pas vident
{
    $pseudo = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $bdd->prepare('SELECT * FROM user WHERE `user_name`=? || `email` = ? AND `password`= ?');
    $check->execute(array($user_name, $email, $password));
    $data = $check->fetch();
    $row = $check->rowCount();

    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {
        $_SESSION['loggued'] = true;
        $_SESSION['user'] = $data;
        header("location: settings.php"); // redirection sur le dashboard
        die();
    } else {
        header('Location: account.php?login_err=already');
        die();
    }
} else {
    header('Location: account.php');
    die();
} 
    // si le formulaire est envoyé sans aucune données