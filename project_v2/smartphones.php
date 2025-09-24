<?php
session_start();

// Load current cart count for header
$cart = $_SESSION['cart'] ?? [];
$cartCount = array_sum(array_column($cart, 'qty'));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBay SG - Smartphones</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo"> TechBay SG </a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?= $cartCount ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > <span>Smartphones</span>
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
      <h2>Smartphones</h2>

      <div class="product-grid">

        <!-- iPhone 15 Pro -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/iphone15pro.php">
            <img src="images/iphone15pro.jpg" alt="iPhone 15 Pro">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1450</span>
                <span class="new-price">€1300</span>
              </div>
              <h3 class="product-title">Apple iPhone 15 Pro (256GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="iPhone 15 Pro">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/iphone15pro.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Samsung Galaxy S23 Ultra -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/galaxys23ultra.php">
            <img src="images/samsungs23.png" alt="Samsung Galaxy S23 Ultra">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1450</span>
                <span class="new-price">€1300</span>
              </div>
              <h3 class="product-title">Samsung Galaxy S23 Ultra (256GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy S23 Ultra">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/samsungs23.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Samsung Galaxy A35 -->
        <div class="product-box">
          <div class="discount-badge">-15%</div>
          <a href="products/galaxya35.php">
            <img src="images/samsunga35.png" alt="Samsung Galaxy A35 5G">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€450</span>
                <span class="new-price">€380</span>
              </div>
              <h3 class="product-title">Samsung Galaxy A35 5G (128GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy A35 5G">
              <input type="hidden" name="price" value="380">
              <input type="hidden" name="image" value="images/samsunga35.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- iPhone 16 -->
        <div class="product-box">
          <div class="discount-badge">-8%</div>
          <a href="products/iphone16.php">
            <img src="images/iphone16.png" alt="iPhone 16">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1500</span>
                <span class="new-price">€1380</span>
              </div>
              <h3 class="product-title">iPhone 16 (128GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="iPhone 16">
              <input type="hidden" name="price" value="1380">
              <input type="hidden" name="image" value="images/iphone16.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Google Pixel 8A -->
        <div class="product-box">
          <div class="discount-badge">-12%</div>
          <a href="products/pixel8a.php">
            <img src="images/googlepixel8a.png" alt="Google Pixel 8A">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€600</span>
                <span class="new-price">€530</span>
              </div>
              <h3 class="product-title">Google Pixel 8A (128GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Google Pixel 8A">
              <input type="hidden" name="price" value="530">
              <input type="hidden" name="image" value="images/googlepixel8a.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- iPhone 13 -->
        <div class="product-box">
          <div class="discount-badge">-20%</div>
          <a href="products/iphone13.php">
            <img src="images/iphone13.webp" alt="iPhone 13">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1000</span>
                <span class="new-price">€800</span>
              </div>
              <h3 class="product-title">Apple iPhone 13 (128GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="iPhone 13">
              <input type="hidden" name="price" value="800">
              <input type="hidden" name="image" value="images/iphone13.webp">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Huawei Mate 50 Pro -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/mate50pro.php">
            <img src="images/huaweimate50pro.png" alt="Huawei Mate 50 Pro">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1450</span>
                <span class="new-price">€1300</span>
              </div>
              <h3 class="product-title">Huawei Mate 50 Pro (256GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Huawei Mate 50 Pro">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/huaweimate50pro.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
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

</body>
</html>
