<?php
session_start();
// Count cart items
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Us - TechBay SG</title>
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
    <a href="index.php">Home</a> > <span>Contact Us</span>
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
      <h2>Contact Us</h2>
      <p>
        Have questions or need assistance? Get in touch with us through the form below
        or use the contact details provided.
      </p>

      <h3>Our Contact Details</h3>
      <p>
        📧 Email: <a href="mailto:support@techbaysg.com">support@techbaysg.com</a><br>
        📞 Phone: +65 6123 4567 <br>
        📍 Address: Nanyang Technological University, Singapore
      </p>

      <h3>Send Us a Message</h3>
      <form action="send_message.php" method="post" class="contact-form" onsubmit="return validateContactForm()">
        <label for="name">Full Name</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email Address</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br><br>

        <button type="submit" class="add-cart">📨 Send Message</button>
      </form>
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

  <script src="validation.js"></script>
</body>
</html>
