<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Organic Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<main class="products-page">
    <div class="products-header">
        <h1>Our Products</h1>
        <p>Browse our wide selection of high-quality products.</p>
    </div>

    <div class="product-grid">
        <!-- Product 1 -->
        <div class="product-card">
            <img src="images/vegetable.jpg" alt="Fresh Vegetables">
            <h3>Fresh Vegetables Box</h3>
            <p class="price">₱450.00</p>
            <p class="description">Farm-fresh seasonal vegetables delivered daily</p>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Fresh Vegetables Box">
                <input type="hidden" name="product_price" value="450">
                <input type="hidden" name="product_image" value="images/vegetable.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="images/strawberry.jpg" alt="Fresh Strawberries">
            <h3>Fresh Strawberries</h3>
            <p class="price">₱380.00</p>
            <p class="description">Sweet and juicy organic strawberries</p>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Fresh Strawberries">
                <input type="hidden" name="product_price" value="380">
                <input type="hidden" name="product_image" value="images/strawberry.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="images/cucumber.jpg" alt="Fresh Cucumber">
            <h3>Fresh Cucumber</h3>
            <p class="price">₱150.00</p>
            <p class="description">Crisp and refreshing organic cucumbers</p>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Fresh Cucumber">
                <input type="hidden" name="product_price" value="150">
                <input type="hidden" name="product_image" value="images/cucumber.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <img src="images/potato.jpg" alt="Organic Potatoes">
            <h3>Organic Potatoes</h3>
            <p class="price">₱200.00</p>
            <p class="description">Fresh farm potatoes perfect for any meal</p>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="product_name" value="Organic Potatoes">
                <input type="hidden" name="product_price" value="200">
                <input type="hidden" name="product_image" value="images/potato.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Product 5 -->
        <div class="product-card">
            <img src="images/driedmango.jpg" alt="Dried Mango">
            <h3>Dried Mango</h3>
            <p class="price">₱320.00</p>
            <p class="description">Sweet and chewy organic dried mango slices</p>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="5">
                <input type="hidden" name="product_name" value="Dried Mango">
                <input type="hidden" name="product_price" value="320">
                <input type="hidden" name="product_image" value="images/driedmango.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>

        <!-- Product 6 -->
        <div class="product-card">
            <img src="images/guava jam.jpg" alt="Guava Jam">
            <h3>Guava Jam</h3>
            <p class="price">₱280.00</p>
            <p class="description">Homemade organic guava jam, no preservatives</p>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="product_name" value="Guava Jam">
                <input type="hidden" name="product_price" value="280">
                <input type="hidden" name="product_image" value="images/guava jam.jpg">
                <button type="submit" class="btn-cart">Add to Cart</button>
            </form>
        </div>
    </div>
</main>

</body>
</html>
