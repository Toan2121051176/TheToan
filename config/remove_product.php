<?php
session_start();

if (isset($_GET['key'])) {
    $key = $_GET['key'];

    if (isset($_SESSION['user_cart'][$_SESSION['username']][$key])) {
        unset($_SESSION['user_cart'][$_SESSION['username']][$key]);
    }
}
header("Location: ../cart.php");
exit;
?>
