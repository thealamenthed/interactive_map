<?php

if (!isset($_SESSION['loggued'])) {
    header('Location: account.php');
    die();
}
