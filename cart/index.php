<?php
    session_start();
    include '../library/sql/GuestNoAccess.php';
?>
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
                    
                    <!-- If cart is empty -->
                    <div class="cart-item-zero">
                        <p>You do not have any item in cart</p>
                        <a href="../products/">Shop</a>
                    </div>

                    <?php
                        include '../library/sql/dbconn.php';
                        $uid = $_SESSION['user'];
                        $sql1 = "SELECT
                                    cart.pid as pid,
                                    cart.text as text,
                                    cart.color as color,
                                    cart.img as printing_img,
                                    cart.wrap as wrap,
                                    cart.comments as comments,
                                    cart.qty as qty,
                                    items.title as title,
                                    items.price as price,
                                    items.img as product_img
                                FROM cart
                                INNER JOIN items ON cart.pid = items.id
                                WHERE cart.uid = $uid";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result1) > 0) {
                            while ($row = mysqli_fetch_assoc($result1)) {
                    ?>
                    <div class="cart-item" data-item-id="<?php echo $row['pid']; ?>">
                        <span class="item-no"></span>
                        <div class="cart-item-info">
                            <img src="../images/uploads/items/<?php echo $row['product_img']; ?>" alt="product_image">
                            <p class="item-name"><?php echo $row['title']; ?></p>
                            <ul class="options">
                                <li>Packaging: <?php echo $row['wrap'] ? 'Wrapped' : 'Not Wrapped'; ?></li>
                                <li>Text: "<?php echo $row['text']; ?>"</li>
                                <li>Color: <div class="color" style="background-color: <?php echo $row['color']; ?>;"></div></li>
                                <?php
                                    if (isset($row['printing_img'])) {
                                        echo "<li>Image: <img src='../images/uploads/printing_images/" . $row['printing_img'] . "'></li>";
                                    }
                                ?>
                                <li>Comments: <?php echo $row['comments']; ?></li>
                            </ul>
                            <span class="price">Rs. <?php echo $row['price']; ?></span>
                            <i class="fa-solid fa-xmark"></i>
                            <div class="qty">
                                <button class="cart_decrease_qty"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" value="<?php echo $row['qty']; ?>" class="cart_qty">
                                <button class="cart_increase_qty"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>

                    <!-- When confirming order -->
                    <div class="order-success">
                        <i class="fa-solid fa-xmark"></i>
                        <h2>Order Success!</h2>
                        <a href="../account/recentorders.php">View Details</a>
                    </div>

                </div>


                <div class="checkout">
                    <div class="checkout-items">
                        <h2>Checkout</h2>
                        <table class="checkout-items-list">
                            <!-- Checkout item list prepends from JS -->

                                        
                            <!-- Wrapping pricing -->
                            <tr class="wrapping">
                                <td>Wrapping</td>
                                <td class="qty">x</td>
                                <td class="rs">Rs.</td>
                                <td class="price"></td>
                            </tr>


                            <!-- Shipping price -->
                            <tr class="shipping">
                                <td colspan="2">Shipping</td>
                                <td class="rs">Rs.</td>
                                <td class="price"></td>
                            </tr>

                        </table>


                        <!-- Total Price -->
                        <div class="total-price">
                            <span>Total Price</span>
                            <div>
                                <span>Rs.</span>
                                <span class="total-price-value"></span>
                            </div>
                        </div>


                    </div>

                    <div class="checkout-address">
                        <span>Shipping to:</span>
                        <?php
                            $sql2 = "SELECT fname, lname, address, city, postalcode, phone FROM users WHERE id = $uid";

                            $result2 = mysqli_query($conn, $sql2);

                            while ($row = mysqli_fetch_assoc($result2)) {
                        ?>
                        <div class="shipping-address">
                            <span><?php echo $row['fname'] . ' ' . $row['lname']; ?>,</span>
                            <span><?php echo $row['address']; ?>,</span>
                            <span><?php echo $row['city'] . ' ' . $row['postalcode']; ?></span>
                            <span><?php echo $row['phone']; ?></span>
                        </div>
                        <?php } ?>
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
                        <a href="./sql/confirmorder.php" id="cartConfirmOrder">Confirm Order</a>
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