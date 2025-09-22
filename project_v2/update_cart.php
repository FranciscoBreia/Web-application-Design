<?php
session_start(); //Without this, you cannot store cart data across pages.

if (isset($_POST['product'], $_POST['qty'])) {  // isset -- value and is not null
    $product = $_POST['product']; 
    $qty = (int)$_POST['qty'];

    if ($qty <= 0) {
        unset($_SESSION['cart'][$product]); // remove item if qty is 0 or less
    } else {
        if (isset($_SESSION['cart'][$product])) {
            $_SESSION['cart'][$product]['qty'] = $qty;
        }
    }
}

// recalc subtotal
$total = 0;
foreach ($_SESSION['cart'] ?? [] as $item) {
    $total += $item['price'] * $item['qty'];
}

echo $total;
