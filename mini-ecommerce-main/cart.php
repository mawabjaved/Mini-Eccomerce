<?php include('header.php');?>
<div class="cart-header mt-5">
    <h2 class="fw-bold">Your Shopping Cart</h2>
</div>

<?php
if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
    $totalCartPrice = 0;
?>
<div class="row g-5">
    <!-- Cart Items -->
    <div class="col-lg-8">
        <?php
        foreach($_SESSION['cart'] as $key => $cart){
            $sql = $conn->query("SELECT * FROM product WHERE id = '{$cart['id']}'");
            $row = $sql->fetch_assoc();
            $itemTotal = $row['price'] * $cart['qty'];
            $totalCartPrice += $itemTotal;
        ?>
        <div class="cart-item d-flex align-items-center flex-wrap flex-md-nowrap">
            <img src="products/<?php echo $row['image']; ?>" class="cart-item-img me-4" alt="Product">
            
            <div class="flex-grow-1">
                <h5 class="fw-bold mb-1"><?php echo $row['name']; ?></h5>
                <p class="text-muted small mb-0">Unit Price: $<?php echo $row['price']; ?></p>
            </div>

            <div class="px-3">
                <form action="php/cart.php" method="post" class="d-flex align-items-center gap-2">
                    <input type="number" class="form-control cart-quantity-input shadow-none" value="<?php echo $cart['qty']; ?>" name="quantity" min="1">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                    <button type="submit" name="update" class="btn btn-primary btn-sm btn-update">Update</button>
                </form>
            </div>

            <div class="px-3 text-end" style="min-width: 100px;">
                <p class="fw-bold mb-0 text-primary">$<?php echo $itemTotal; ?></p>
            </div>

            <div class="ps-3">
                <a href="php/cart.php?pid=<?php echo $row['id']; ?>&remove" class="btn-remove">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </a>
            </div>
        </div>
        <?php } ?>
        
        <div class="mt-4">
            <a href="index.php" class="text-decoration-none text-muted">
                &larr; Continue Shopping
            </a>
        </div>
    </div>

    <!-- Summary Section -->
    <div class="col-lg-4">
        <div class="summary-card">
            <h4 class="fw-bold mb-4">Order Summary</h4>
            <div class="summary-row">
                <span class="text-muted">Subtotal</span>
                <span>$<?php echo $totalCartPrice; ?></span>
            </div>
            <div class="summary-row">
                <span class="text-muted">Shipping</span>
                <span class="text-success">Free</span>
            </div>
            <div class="summary-row">
                <span class="text-muted">Taxes</span>
                <span>$0.00</span>
            </div>
            <div class="summary-total">
                <span>Total</span>
                <span>$<?php echo $totalCartPrice; ?></span>
            </div>
            <button class="btn btn-primary w-100 mt-4 py-3">Proceed to Checkout</button>
            <div class="text-center mt-3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" height="20" class="opacity-50 mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" height="15" class="opacity-50 mx-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" height="20" class="opacity-50 mx-2">
            </div>
        </div>
    </div>
</div>
<?php
} else {
?>
<div class="empty-cart animate-up">
    <div class="empty-cart-icon">🛒</div>
    <h3 class="fw-bold">Your cart is empty</h3>
    <p class="text-muted mb-4">Looks like you haven't added anything to your cart yet.</p>
    <a href="index.php" class="btn btn-primary px-5 py-3">Start Shopping</a>
</div>
<?php
}
?>

<?php include('footer.php'); ?>