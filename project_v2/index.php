<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBay SG - Home</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo"> TechBay SG </a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?php echo $cartCount; ?>)</a>
    </div>
  </div>

  <div class="breadcrumb">
    <a href="index.php">Home</a>
  </div>

  <!-- CONTAINER -->
  <div class="container">

    <!-- SIDEBAR NAVIGATION -->
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="smartphones.php"> Smartphones</a>
      <a href="tvs.php"> TVs</a>
      <a href="audio.php"> Audio</a>
      <a href="wearables.php"> Wearables</a>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="maincontent">

      <!-- HERO -->
      <div class="hero">
        <h1> From 10% OFF to Mega Deals </h1>
        <a href="bigpromotion.php" class="shop-now-btn">Shop Now</a>
      </div>

      <!-- HOT DEALS -->
      <h2>Hot Deals</h2>
      <div class="product-grid">

        <!-- LG OLED -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/tvlg.php">
            <img src="images/tvoled.jpg" alt="TV LG OLED">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1,450</span>
                <span class="new-price">€1,300</span>
              </div>
              <h3 class="product-title">TV LG (OLED evo - 65'' - 4K Ultra HD - Smart TV)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="TV LG OLED">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/tvoled.jpg">
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
                <span class="old-price">€1,000</span>
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

        <!-- Marshall Headphones -->
        <div class="product-box">
          <div class="discount-badge">-25%</div>
          <a href="products/marshallmajor4.php">
            <img src="images/marshall.webp" alt="Marshall Headphones">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€270</span>
                <span class="new-price">€200</span>
              </div>
              <h3 class="product-title">Marshall Major IV</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Marshall Major IV">
              <input type="hidden" name="price" value="200">
              <input type="hidden" name="image" value="images/marshall.webp">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Apple Watch -->
        <div class="product-box">
          <div class="discount-badge">-30%</div>
          <a href="products/applewatchseries11.php">
            <img src="images/applewatch.webp" alt="Apple Watch">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€570</span>
                <span class="new-price">€400</span>
              </div>
              <h3 class="product-title">Apple Watch Series 11 (GPS, 41mm Aluminium Case)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Apple Watch Series 11">
              <input type="hidden" name="price" value="400">
              <input type="hidden" name="image" value="images/applewatch.webp">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>
      </div>

      <!-- BEST SELLERS -->
      <h2>Best Sellers</h2>
      <div class="best-sellers-grid">

        <!-- Samsung Galaxy Watch -->
        <div class="product-box">
          <a href="products/galaxywatch.php">
            <img src="images/galaxywatch.jpg" alt="Samsung Galaxy Watch">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€350</span>
              </div>
              <h3 class="product-title">Samsung Galaxy Watch 4 (Bluetooth, 44mm, Smart Fitness Watch)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch">
              <input type="hidden" name="price" value="350">
              <input type="hidden" name="image" value="images/galaxywatch.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Sony OLED -->
        <div class="product-box">
          <a href="products/sonyoled.php">
            <img src="images/sonytv.jpg" alt="Sony OLED TV">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€1,200</span>
              </div>
              <h3 class="product-title">Sony OLED TV (65'' 4K Ultra HD - Smart TV)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sony OLED TV">
              <input type="hidden" name="price" value="1200">
              <input type="hidden" name="image" value="images/sonytv.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- iPhone 15 Pro -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/iphone15pro.php">
            <img src="images/iphone15pro.jpg" alt="iPhone 15 Pro">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1,450</span>
                <span class="new-price">€1,300</span>
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

        <!-- JBL Bluetooth Speaker -->
        <div class="product-box">
          <a href="products/jblspeaker.php">
            <img src="images/jblspeaker.jpg" alt="JBL Bluetooth Speaker">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€150</span>
              </div>
              <h3 class="product-title">JBL Bluetooth Speaker (Portable Wireless - Waterproof)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="JBL Bluetooth Speaker">
              <input type="hidden" name="price" value="150">
              <input type="hidden" name="image" value="images/jblspeaker.jpg">
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

  <script src="main.js"></script>
</body>
</html>
