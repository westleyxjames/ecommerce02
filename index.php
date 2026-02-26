<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5011280,4,511,95,18,00000000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5011280&101" alt="free web tracker" border="0"></a></noscript>
<!-- Histats.com  END  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Lunaris Shop</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header id="main-header"></header>

    <main class="cart-page">
        <div class="container">
            <h1 class="page-title">Shopping Cart</h1>
            
            <div id="empty-cart" class="empty-cart hidden">
                <svg class="empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <h2>Your Cart is Empty</h2>
                <p>Add some products to get started!</p>
                <a href="shop.html" class="btn btn-primary">Continue Shopping</a>
            </div>

            <div id="cart-content" class="cart-layout">
                <!-- Cart Items -->
                <div class="cart-items">
                    <div id="cart-items-list" class="cart-list"></div>
                    <a href="shop.html" class="continue-shopping">← Continue Shopping</a>
                </div>

                <!-- Order Summary -->
                <div class="order-summary-container">
                    <div class="order-summary">
                        <h2>Order Summary</h2>
                        <div class="summary-row">
                            <span>Subtotal</span>
                            <span id="subtotal">$0.00</span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping</span>
                            <span id="shipping">$0.00</span>
                        </div>
                        <div id="shipping-message" class="shipping-message"></div>
                        <div class="summary-row total-row">
                            <span>Total</span>
                            <span id="total">$0.00</span>
                        </div>
                        <a href="checkout.html" class="btn btn-primary checkout-btn">Proceed to Checkout</a>
                        
                        <div class="payment-methods-box">
                            <h3>We Accept</h3>
                            <div class="payment-methods">
                                <span class="payment-badge">Visa</span>
                                <span class="payment-badge">Mastercard</span>
                                <span class="payment-badge">PayPal</span>
                                <span class="payment-badge">Apple Pay</span>
                                <span class="payment-badge">COD</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="main-footer"></footer>
    <div id="cookie-consent" class="cookie-consent hidden">
        <div class="cookie-content">
            <p class="cookie-text">We use cookies to enhance your experience. <a href="privacy-policy.html" class="cookie-link">Privacy Policy</a></p>
            <div class="cookie-buttons">
                <button class="btn btn-outline-sm" id="cookie-decline">Decline</button>
                <button class="btn btn-primary-sm" id="cookie-accept">Accept</button>
            </div>
        </div>
    </div>
    <button id="scroll-to-top" class="scroll-to-top hidden">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="scroll-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
    <div id="toast-container" class="toast-container"></div>

    <script src="js/data/products.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/components.js"></script>
    <script src="js/main.js"></script>
    <script src="js/cart-page.js"></script>
</body>
</html>
