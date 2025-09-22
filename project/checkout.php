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
    <a href="index.html" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="signup.html">Sign Up</a>
      <a href="cart.html">🛒 Cart</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.html">Home</a> > 
    <a href="cart.html">Cart</a> > 
    <span>Checkout</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">

    <!-- SIDEBAR -->
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="smartphones.html">Smartphones</a>
      <a href="tvs.html">TVs</a>
      <a href="audio.html">Audio</a>
      <a href="wearables.html">Wearables</a>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="maincontent">
      <h2>Checkout</h2>
      <p>Please enter your billing, shipping, and payment details to complete your order.</p>

      <div class="checkout-container">

        <!-- LEFT COLUMN: FORM -->
        <form action="place_order.php" method="post" class="checkout-form" 
              onsubmit="return validateCheckoutForm()">

          <h3>Billing Information</h3>
          <label for="fullname">Full Name</label>
          <input type="text" id="fullname" name="fullname" required>

          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>

          <label for="phone">Phone Number</label>
          <input type="text" id="phone" name="phone" required>

          <h3>Shipping Address</h3>
          <label for="street">Street Address</label>
          <input type="text" id="street" name="street" required>

          <label for="city">City</label>
          <input type="text" id="city" name="city" required>

          <label for="postal">Postal Code</label>
          <input type="text" id="postal" name="postal" required>

          <label for="country">Country</label>
          <select id="country" name="country" required>
            <option value="">--Select--</option>
            <option value="Singapore">Singapore</option>
            <option value="Portugal">Portugal</option>
            <option value="USA">USA</option>
          </select>

          <h3>Payment Method (Debit Card Only)</h3>
          <label for="cardname">Cardholder Name</label>
          <input type="text" id="cardname" name="cardname" required>

          <label for="cardnumber">Card Number</label>
          <input type="text" id="cardnumber" name="cardnumber" maxlength="16" required>

          <label for="expiry">Expiry Date (MM/YY)</label>
          <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>

          <label for="cvv">CVV</label>
          <input type="text" id="cvv" name="cvv" maxlength="3" required>

          <button type="submit" class="checkout-btn">💳 Place Order</button>
        </form>

        <!-- RIGHT COLUMN: ORDER SUMMARY -->
        <div class="order-summary">
            <div class="summary-content">
                <h3>Order Summary</h3>
                <p>iPhone 15 Pro - €1299</p>
                <p>JBL Speaker - €199</p>
                <p>Shipping - €20</p>
                <hr>
                <p><strong>Total - €1518</strong></p>
            </div>


</div>

      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <p>© 2025 TechBay SG. All rights reserved.</p>
    <p>
      <a href="index.html">Home</a> |
      <a href="about.html">About</a> |
      <a href="contact.html">Contact</a> |
      <a href="faq.html">FAQ</a>
    </p>
  </div>

  <!-- Link validation -->
  <script src="validation.js"></script>
</body>
</html>
