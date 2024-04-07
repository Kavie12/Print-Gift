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


        <!-- Account Content -->
        <div class="account-content">

            <div class="account-section">
                <div class="links">
                    <a href="../account/">My Profile</a>
                    <a href="recentorders.html" class="active">Recent Orders</a>
                </div>
                <div class="details">
                    <h1>Recent Orders</h1>
                    <div class="recent-orders-list">
                        <div class="item">
                            <div class="item-info">
                                <p class="order-id">Order ID: 12189</p>
                                <img src="../images/home_mug_pic.png" alt="image">
                                <div class="order-details">
                                    <p class="date">Date: 2024-01-01</p>
                                    <p class="item-name">Custom Printed White Mug</p>
                                </div>
                                <ul class="options">
                                    <li>Packaging: Wrapped</li>
                                    <li>Text: "Wish You Happy New Year!"</li>
                                    <li>Color: <div class="color red"></div>
                                    </li>
                                    <li>Comments: Text should be bigger</li>
                                </ul>
                                <div class="status">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>Processing</p>
                                </div>
                                <div class="pricing">
                                    <p class="qty">Quantity: 1</p>
                                    <p class="price">Rs. 1100</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-info">
                                <p class="order-id">Order ID: 7283</p>
                                <img src="../images/about-img-1.jpg" alt="product_image">
                                <div class="order-details">
                                    <p class="date">Date: 2023-12-29</p>
                                    <p class="item-name">Custom Printed Black Mug</p>
                                </div>
                                <ul class="options">
                                    <li>Packaging: Not Wrapped</li>
                                    <li>
                                        Image:
                                        <img src="../images/uploads/spiderman-sticker.jpg">
                                        <a href="../images/uploads/spiderman-sticker.jpg" download>Download</a>
                                    </li>
                                    <li>Comments: Set a margin at least half an inch around the image</li>
                                </ul>
                                <div class="status">
                                    <i class="fa-solid fa-truck"></i>
                                    <p>Delivered</p>
                                </div>
                                <div class="pricing">
                                    <p class="qty">Quantity: 2</p>
                                    <p class="price">Rs. 2800</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>

    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>