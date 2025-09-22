<?php
session_start(); // Without this, you cannot store cart data across pages.

if (isset($_POST['remove'])) {   // Checks if a remove action was sent via a form/button.
    $productToRemove = $_POST['remove'];
    unset($_SESSION['cart'][$productToRemove]);  // Remove item from cart in the session
    header("Location: cart.php"); // Redirects back to the cart page (prevents resubmitting the form if you refresh)
    exit;
}

$cart = $_SESSION['cart'] ?? []; // get cart from session
$cartCount = array_sum(array_column($cart, 'qty')); // Count total quantity of items in cart.
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cart - TechBay SG</title>
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
    <a href="index.php">Home</a> > <span>Cart</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="smartphones.php">Smartphones</a>
      <a href="tvs.php">TVs</a>
      <a href="audio.php">Audio</a>
      <a href="wearables.php">Wearables</a>
    </nav>

    <div class="maincontent">
      <h2>Shopping Cart</h2>

      <table class="cart-table">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($cart)): ?>
            <?php 
              $total = 0;
              foreach ($cart as $product => $item): 
                $subtotal = $item['price'] * $item['qty'];
                $total += $subtotal;
            ?>
              <tr data-product="<?= htmlspecialchars($product) ?>" data-price="<?= $item['price'] ?>"> <!-- for JS -->
                <td>
                  <img src="<?= htmlspecialchars($item['image'] ?? 'images/placeholder.png') ?>" 
                       alt="<?= htmlspecialchars($product) ?>" 
                       style="width:60px; height:auto; vertical-align:middle; margin-right:10px;">
                  <?= htmlspecialchars($product) ?>
                </td>
                <td>€<?= number_format($item['price'], 2) ?></td>
                <td>
                  <input type="number" class="qty" min="1" value="<?= $item['qty'] ?>">
                </td>
                <td class="subtotal">€<?= number_format($subtotal, 2) ?></td>
                <td>
                  <form method="post" action="cart.php" style="display:inline;">
                    <button type="submit" name="remove" value="<?= htmlspecialchars($product) ?>">❌ Remove</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?> <!-- cart is empty -->
            <tr><td colspan="5">Your cart is empty.</td></tr>
          <?php endif; ?> <!-- closes the if -->
        </tbody>
      </table>

      <div class="order-summary">
        <h3>Order Summary</h3>
        <?php if (!empty($cart)): ?>
          <p>Subtotal: <span id="subtotal">€<?= number_format($total, 2) ?></span></p>
          <p>Shipping: <span>€20.00 </span></p>
          <p><strong>Total: <span id="total">€<?= number_format($total + 20, 2) ?></span></strong></p>
        <?php else: ?>
          <p>Subtotal: €0.00</p>
          <p>Shipping: €0.00</p>
          <p><strong>Total: €0.00</strong></p>
        <?php endif; ?>
        <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>
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

<script>
document.querySelectorAll(".qty").forEach(input => {  
  input.addEventListener("change", () => {  
    let row = input.closest("tr"); 
    let product = row.dataset.product;  
    let price = parseFloat(row.dataset.price);
    let qty = parseInt(input.value);

    if (qty < 1) qty = 1;
    input.value = qty;

    // update row subtotal
    let newSubtotal = price * qty;
    row.querySelector(".subtotal").textContent = "€" + newSubtotal.toFixed(2);

    // update session with fetch
    fetch("update_cart.php", { 
      method: "POST", 
      headers: {"Content-Type": "application/x-www-form-urlencoded"}, 
      body: "product=" + encodeURIComponent(product) + "&qty=" + qty 
    })
    .then(res => res.text()) 
    .then(subtotal => { 
      document.getElementById("subtotal").textContent = "€" + parseFloat(subtotal).toFixed(2);
      document.getElementById("total").textContent = "€" + (parseFloat(subtotal) + 20).toFixed(2);
    });
  });
});
</script>

</body>
</html>
