<?php
session_start();

$cart = $_SESSION['cart'] ?? [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $email    = $_POST['email'] ?? '';

    // Get cart totals
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['qty'];
    }
    $shipping = !empty($cart) ? 20 : 0;
    $grandTotal = $total + $shipping;

    unset($_SESSION['cart']); // Clear cart after order
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation - TechBay SG</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (0)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > 
    <a href="cart.php">Cart</a> > 
    <a href="checkout.php">Checkout</a> > 
    <span>Confirmation</span>
  </div>

  <!-- CONFIRMATION MAIN -->
  <div class="confirmation-container">
    <div class="confirmation-box">
      <h2>✅ Thank You, <?= htmlspecialchars($fullname) ?>!</h2>
      <p>Your order has been placed successfully.</p>
      <p>A confirmation email will be sent to <strong><?= htmlspecialchars($email) ?></strong>.</p>

      <h3 style="margin-top:20px;">Order Summary</h3>
      <?php if (!empty($cart)): ?>
        <?php foreach ($cart as $product => $item): ?>
          <p><?= htmlspecialchars($product) ?> (x<?= $item['qty'] ?>) 
             - €<?= number_format($item['price'] * $item['qty'], 2) ?></p>
        <?php endforeach; ?>
        <p>Shipping - €<?= number_format($shipping, 2) ?></p>
        <hr>
        <p><strong>Total - €<?= number_format($grandTotal, 2) ?></strong></p>
      <?php else: ?>
        <p>Your cart was empty.</p>
      <?php endif; ?>

      <a href="index.php" class="back-home-btn">⬅ Back to Home</a>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <p>© 2025 TechBay SG. All rights reserved.</p>
    <p>
      <a href="index.php">Home</a> |
      <a href="about.php">About</a> |
      <a href="contact.php">Contact</a> |
      <a href="faq.php">FAQ</a>
    </p>
  </div>

</body>
</html>
