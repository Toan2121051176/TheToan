<?php
function addProductToCart($product) {
    if (!isset($_SESSION['user_cart'][$_SESSION['username']])) {
        $_SESSION['user_cart'][$_SESSION['username']] = array();
    }
    $found = false;
    foreach ($_SESSION['user_cart'][$_SESSION['username']] as $key => $prd) {
        if ($prd['name'] === $product['name']) {
            $_SESSION['user_cart'][$_SESSION['username']][$key]['quantity'] += $product['quantity'];
            $found = true;
            break;
        }
    }
    if (!$found) {
        $_SESSION['user_cart'][$_SESSION['username']][] = $product;
        $found = true; 
    }
    return $found; 
}
?>
