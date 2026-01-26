<?php
include 'header.php'; // includes navbar and starts session

// Add product to cart if POSTed
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $item = [
        'id' => $_POST['product_id'],
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price']
    ];

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $item;
}

// Get cart items
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | My Ecommerce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- navbar from header.php is already included above -->

<?php if(empty($cart)): ?>
    <p>Your cart is empty.</p>
<?php else: ?>
    <ul>
        <?php foreach($cart as $item): ?>
            <li><?php echo $item['name']; ?> - ₱<?php echo $item['price']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</body>
</html>
