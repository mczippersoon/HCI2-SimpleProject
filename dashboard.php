<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>
<body>

<header class="dashboard-navbar">
    <div class="navbar-container">
        <div class="logo">
            <a href="dashboard.php">Organic Store</a>
        </div>
        <nav class="nav-links">
            <a href="products.php">Products</a>
            <a href="profile.php">Profile</a>
            <a href="cart.php">Cart</a>
            <a href="checkout.php">Checkout</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
</header>

<main class="product-container">

    <!-- Hero -->
<section class="hero">
    <div class="hero-container">
        <div class="hero-left">
            <h1>Good food.<br>Fast delivery.<br>Zero stress.</h1>
            <p>Your one-stop shop for daily essentials</p>
            <a href="products.php" class="btn-hero">Order Now →</a>
        <div> 
     </div>
    </div>
        <div class="hero-right">
            <img src="images/vegetable.jpg" alt="Fresh Groceries">
        </div>
    </div>
</section>

    <!-- Products -->
    <h2 id="products">Browse Products</h2>

    <div class="product-grid">

        <!-- PRODUCT 1 -->
        <div class="product-card">
            <img src="images/headphones.jpg" alt="Wireless Headphones">
            <h3>Wireless Headphones</h3>
            <p>₱1,200.00</p>

            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Wireless Headphones">
                <input type="hidden" name="product_price" value="1200">
                <input type="hidden" name="product_image" value="images/headphones.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- PRODUCT 2 -->
        <div class="product-card">
            <img src="images/watch.jpg" alt="Smart Watch">
            <h3>Smart Watch</h3>
            <p>₱2,500.00</p>

            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Smart Watch">
                <input type="hidden" name="product_price" value="2500">
                <input type="hidden" name="product_image" value="images/watch.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- PRODUCT 3 -->
        <div class="product-card">
            <img src="images/mouse.jpg" alt="Gaming Mouse">
            <h3>Gaming Mouse</h3>
            <p>₱800.00</p>

            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Gaming Mouse">
                <input type="hidden" name="product_price" value="800">
                <input type="hidden" name="product_image" value="images/mouse.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

    </div>

</main>

</body>
</html>
