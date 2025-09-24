<?php
session_start();

// Get cart from session
$cart = $_SESSION['cart'] ?? [];
$cartCount = array_sum(array_column($cart, 'qty'));

// calculate totals
$total = 0;
foreach ($cart as $item) {
    $total += $item['price'] * $item['qty'];
}
$shipping = !empty($cart) ? 20 : 0;
$grandTotal = $total + $shipping;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout - TechBay SG</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?= $cartCount ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > 
    <a href="cart.php">Cart</a> > 
    <span>Checkout</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">

    <!-- SIDEBAR -->
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="smartphones.php">Smartphones</a>
      <a href="tvs.php">TVs</a>
      <a href="audio.php">Audio</a>
      <a href="wearables.php">Wearables</a>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="maincontent">
      <h2>Checkout</h2>
      <p>Please enter your billing, shipping, and payment details to complete your order.</p>

      <div class="checkout-container">

        <!-- LEFT COLUMN: FORM -->
        <form action="place_order.php" method="post" class="checkout-form" >

          <h3>Billing Information</h3>

          <label for="fullname">Full Name <span class="hint">(letters and spaces only)</span></label>
          <input type="text" id="fullname" name="fullname" required>

          <label for="email">Email Address <span class="hint">(e.g. name@example.com)</span></label>
          <input type="email" id="email" name="email" required>

          <label for="phone">Phone Number <span class="hint">(8 digits, starts with 6/8/9)</span></label>
          <input type="text" id="phone" name="phone" required>

          <h3>Shipping Address</h3>

          <label for="street">Street Address <span class="hint">(min 5 characters)</span></label>
          <input type="text" id="street" name="street" required>

          <label for="city">City <span class="hint">(min 2 characters)</span></label>
          <input type="text" id="city" name="city" required>

          <label for="postal">Postal Code <span class="hint">(6 digits)</span></label>
          <input type="text" id="postal" name="postal" required>

          <label for="country">Country</label>
          <select id="country" name="country" required>
            <option value="">--Select--</option>
            <option value="Singapore">Singapore</option>
            <option value="Portugal">Portugal</option>
            <option value="USA">USA</option>
          </select>

          <h3>Payment Method (Debit Card Only)</h3>

          <label for="cardname">Cardholder Name <span class="hint">(as on card)</span></label>
          <input type="text" id="cardname" name="cardname" required>

          <label for="cardnumber">Card Number <span class="hint">(16 digits)</span></label>
          <input type="text" id="cardnumber" name="cardnumber" maxlength="16" required>

          <label for="expiry">Expiry Date <span class="hint">(MM/YY)</span></label>
          <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>

          <label for="cvv">CVV <span class="hint">(3 digits)</span></label>
          <input type="text" id="cvv" name="cvv" maxlength="3" required>

          <button type="submit" class="checkout-btn">💳 Place Order</button>
        </form>

        <!-- RIGHT COLUMN: ORDER SUMMARY -->
        <div class="order-summary">
          <div class="summary-content">
            <h3>Order Summary</h3>
            <?php if (!empty($cart)): ?>
              <?php foreach ($cart as $product => $item): ?>
                <p>
                  <?= htmlspecialchars($product) ?> (x<?= $item['qty'] ?>) 
                  - €<?= number_format($item['price'] * $item['qty'], 2) ?>
                </p>
              <?php endforeach; ?>
              <p>Shipping - €<?= number_format($shipping, 2) ?></p>
              <hr>
              <p><strong>Total - €<?= number_format($grandTotal, 2) ?></strong></p>
            <?php else: ?>
              <p>Your cart is empty.</p>
            <?php endif; ?>
          </div>
        </div>

      </div>
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

  <!-- Link validation -->
  <script src="validation.js"></script>
</body>
</html>
