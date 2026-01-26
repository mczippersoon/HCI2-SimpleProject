<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

$products = [
    [
        'id' => 1,
        'name' => 'Wireless Headphones',
        'price' => 1200,
        'image' => 'images/headphones.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Smart Watch',
        'price' => 2500,
        'image' => 'images/watch.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Gaming Mouse',
        'price' => 800,
        'image' => 'images/mouse.jpg'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Ecommerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="dashboard-navbar">
    <div class="navbar-container">
        <div class="logo">
            <a href="dashboard.php">My Ecommerce</a>
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

    <h2>Browse Products</h2>

    <div class="product-grid">
        <?php foreach($products as $product): ?>
            <div class="product-card">
                <img src="<?php echo $product['image']; ?>" alt="">
                <h3><?php echo $product['name']; ?></h3>
                <p>₱<?php echo number_format($product['price'], 2); ?></p>

                <form method="post" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                    <button type="submit" class="btn-cart">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

</main>

</body>
</html>
