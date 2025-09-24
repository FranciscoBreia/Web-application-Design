<?php
session_start();

$product = $_POST['product'] ?? null; // product name
$price   = $_POST['price'] ?? null;   // product price
$image   = $_POST['image'] ?? null;   // product image

if ($product && $price) {
    if (!isset($_SESSION['cart'][$product])) {
        $_SESSION['cart'][$product] = [
            'price' => (float)$price,
            'qty'   => 1,
            'image' => $image ?? 'images/placeholder.png' // store image
        ];
    } else {
        $_SESSION['cart'][$product]['qty']++;
    }
}

// Stay on same page after adding
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>
