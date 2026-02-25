<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$cartItems = $_SESSION['cart'] ?? [];
$cartHasItems = !empty($cartItems);
$cartTotal = 0;

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Organic Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main class="cart-page">
    <div class="cart-header">
        <h1>Checkout</h1>
        <?php if ($cartHasItems): ?>
            <p>Review your items before placing your order.</p>
        <?php else: ?>
            <p>Your cart is empty. Add products to proceed.</p>
        <?php endif; ?>
    </div>

    <?php if ($cartHasItems): ?>
        <div class="cart-grid">
            <div class="cart-items">
                <?php foreach ($cartItems as $item): ?>
                    <?php $lineTotal = $item['price'] * $item['quantity']; $cartTotal += $lineTotal; ?>
                    <div class="cart-item">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                        <div class="cart-item-info">
                            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                            <p class="cart-price">₱<?php echo number_format($item['price'], 2); ?> × <?php echo (int)$item['quantity']; ?></p>
                            <p class="cart-subtotal">Subtotal: ₱<?php echo number_format($lineTotal, 2); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <aside class="cart-summary">
                <h2>Order Summary</h2>
                <div class="cart-summary-row">
                    <span>Items</span>
                    <span>₱<?php echo number_format($cartTotal, 2); ?></span>
                </div>
                <div class="cart-summary-row total">
                    <span>Total</span>
                    <span>₱<?php echo number_format($cartTotal, 2); ?></span>
                </div>
                <button class="btn-checkout" type="button" onclick="alert('Order placed! (stub)')">Place Order</button>
            </aside>
        </div>
    <?php endif; ?>

    <?php if (!$cartHasItems): ?>
        <a class="btn-checkout" href="products.php" style="max-width: 320px; display: inline-block;">Back to Products</a>
    <?php endif; ?>
</main>

</body>
</html>
