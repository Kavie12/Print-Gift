<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT GIFT - Customize a Gift for a Memorable Moment</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../library/global.css">
</head>

<body>
    <div class="container">

        <!-- Navbar -->
        <?php
            include '../library/Navbar.php';
        ?>


        <!-- Cart Content -->
        <div class="cart-content">

            <div class="cart-tab">
                <div class="cart-list">
                    <div class="cart-item-zero">
                        <p>You do not have any item in cart</p>
                        <a href="../products/">Shop</a>
                    </div>
                    <div class="cart-item" data-item-id="1234">
                        <span class="item-id" style="display: none;">1234</span>
                        <span class="item-no"></span>
                        <div class="cart-item-info">
                            <img src="../images/home_mug_pic.png" alt="product_image">
                            <p class="item-name">Custom Printed White Mug</p>
                            <ul class="options">
                                <li>Packaging: Wrapped</li>
                                <li>Text: "Wish You Happy New Year!"</li>
                                <li>Color: <div class="color red"></div>
                                </li>
                                <li>Comments: Text should be bigger</li>
                            </ul>
                            <span class="price">Rs. 1100</span>
                            <i class="fa-solid fa-xmark"></i>
                            <div class="qty">
                                <button class="cart_decrease_qty"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" value="1" class="cart_qty">
                                <button class="cart_increase_qty"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="order-success">
                        <i class="fa-solid fa-xmark"></i>
                        <h2>Order Success!</h2>
                        <a href="../account/recentorders.html">View Details</a>
                    </div>
                    <div class="cart-item" data-item-id="4567">
                        <span class="item-no"></span>
                        <div class="cart-item-info">
                            <img src="../images/about-img-1.jpg" alt="product_image">
                            <p class="item-name">Custom Printed Black Mug</p>
                            <ul class="options">
                                <li>Packaging: Not Wrapped</li>
                                <li>Image: <img src="../images/uploads/spiderman-sticker.jpg"></li>
                                <li>Comments: Set a margin at least half an inch around the image</li>
                            </ul>
                            <span class="price">Rs. 1400</span>
                            <i class="fa-solid fa-xmark"></i>
                            <div class="qty">
                                <button class="cart_decrease_qty"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" value="2" class="cart_qty">
                                <button class="cart_increase_qty"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout">
                    <div class="checkout-items">
                        <h2>Checkout</h2>
                        <table class="checkout-items-list">
                            <tr>
                                <td>Custom Printed White Mug</td>
                                <td class="qty">1x</td>
                                <td class="rs">Rs.</td>
                                <td class="price">1100</td>
                            </tr>
                            <tr>
                                <td>Custom Printed Black Mug</td>
                                <td class="qty">2x</td>
                                <td class="rs">Rs.</td>
                                <td class="price">2800</td>
                            </tr>
                            <tr class="wrapping">
                                <td>Wrapping</td>
                                <td class="qty">1x</td>
                                <td class="rs">Rs.</td>
                                <td class="price">100</td>
                            </tr>
                            <tr class="shipping">
                                <td colspan="2">Shipping</td>
                                <td class="rs">Rs.</td>
                                <td class="price">300</td>
                            </tr>
                        </table>
                        <div class="total-price">
                            <span>Total Price</span>
                            <div>
                                <span>Rs.</span>
                                <span class="total-price-value">4300</span>
                            </div>

                        </div>
                    </div>
                    <div class="checkout-address">
                        <span>Shipping to:</span>
                        <div class="shipping-address">
                            <span>Peter Parker</span>
                            <span>22/A/12, Alwis Road, Kaduwela</span>
                            <span>10640</span>
                            <span>Kaduwela</span>
                        </div>
                        <a href="../account/editprofile.php">Edit</a>

                    </div>
                    <div class="checkout-payment-option">
                        <span>Payment Options</span>
                        <div class="payment-options">
                            <div class="cash-on-delivery">
                                <input type="radio" name="checkout-payment-option" id="checkoutPaymentOption" checked>
                                <label for="checkoutPaymentOption">Cash On Delivery</label>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-order">
                        <a href="#" id="cartConfirmOrder">Confirm Order</a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>


    </div>

    <script src="./script.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>