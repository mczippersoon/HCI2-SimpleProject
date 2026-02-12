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
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </label>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-left">
                <h1>Need it fresh, fast, and easy? Shop with us</h1>
                <p>From farm-fresh produce to pantry must-haves—everything you need, delivered to your doorstep</p>
                <a href="products.php" class="btn-hero">Show Now <span>→</span></a>
            </div>
            <div class="hero-right">
                <img src="images/vegetable.jpg" alt="Fresh Groceries">
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <h2 id="products">Browse Products</h2>

    <div class="product-grid">
        <!-- Product cards will go here -->
    </div>

</main>

</body>
</html>