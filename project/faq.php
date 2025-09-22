<?php
session_start();
// Count items in cart
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>FAQ - TechBay SG</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?php echo $cartCount; ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > <span>FAQ</span>
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
      <h2>Frequently Asked Questions</h2>

      <div class="faq">
        <h3>1. How can I place an order?</h3>
        <p>
          Simply browse our products, add them to your cart 🛒, and proceed to checkout. 
          You'll be guided through the payment and shipping process.
        </p>

        <h3>2. What payment methods do you accept?</h3>
        <p>
          We currently accept Visa, MasterCard, PayNow, and Debit Card payments 💳.
        </p>

        <h3>3. How long does delivery take?</h3>
        <p>
          Orders are typically delivered within <strong>3-5 business days</strong>. 
          You will receive an email with tracking details once your order has been shipped.
        </p>

        <h3>4. Can I return or exchange a product?</h3>
        <p>
          Yes! You can request a return or exchange within <strong>14 days</strong> of delivery, 
          provided the product is unused and in original packaging.
        </p>

        <h3>5. How do I contact customer support?</h3>
        <p>
          You can reach us anytime via 📧 <strong>support@techbaysg.com</strong> or call us at 📞 +65 6123 4567.
        </p>
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

</body>
</html>
