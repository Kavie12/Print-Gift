<?php
    session_start();
    include '../../library/sql/AdminGuestNoAccess.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT GIFT - Admin Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../library/admin.css">
</head>

<body data-page='users'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- User Orders -->
            <div class="user-orders">
                <h1>Orders of Peter</h1>
                <div class="back-btn-and-search">
                    <a href="../users/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <div class="search">
                        <input type="text" placeholder="Search orders of Peter">
                    </div>
                </div>
                <div class="user-orders-list">
                    <div class="item" data-order-id="1234">
                        <div class="item-info">
                            <p class="order-id">Order ID: 1234</p>
                            <img src="../../images/home_mug_pic.png" alt="image">
                            <div class="details">
                                <p class="date">Date: 2024-01-01</p>
                                <p class="product-id">Product ID: 1792</p>
                                <p class="item-name">Custom Printed White Mug</p>
                            </div>
                            <ul class="options">
                                <li>Packaging: Wrapped</li>
                                <li>Text: "Wish You Happy New Year!"</li>
                                <li>Color: <div class="color red"></div>
                                </li>
                                <li>Comments: Text should be bigger</li>
                            </ul>
                            <div class="pricing">
                                <p class="qty">Quantity: 1</p>
                                <p class="price">Rs. 1100</p>
                            </div>
                        </div>
                        <form class="status">
                            <!-- Fix same ID and name issues -->
                            <div>
                                <input type="radio" name="user-order-status-1234" id="userOrderStatusDeclined1234"
                                    value="declined">
                                <label for="userOrderStatusDeclined1234">Declined</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-1234" id="userOrderStatusConfirmed1234"
                                    value="confirmed" checked>
                                <label for="userOrderStatusConfirmed1234">Confirmed</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-1234" id="userOrderStatusProcessing1234"
                                    value="processing">
                                <label for="userOrderStatusProcessing1234">Processing</label>

                            </div>
                            <div>
                                <input type="radio" name="user-order-status-1234" id="userOrderStatusDispatched1234"
                                    value="dispatched">
                                <label for="userOrderStatusDispatched1234">Dispatched</label>

                            </div>
                            <div>
                                <input type="radio" name="user-order-status-1234" id="userOrderStatusDelivered1234"
                                    value="delivered">
                                <label for="userOrderStatusDelivered1234">Delivered</label>
                            </div>

                            <input type="submit" value="Saved!" id="userOrderStatusSave1234">
                        </form>
                    </div>
                    <div class="item" data-order-id="5678">
                        <div class="item-info">
                            <p class="order-id">Order ID: 5678</p>
                            <img src="../../images/about-img-1.jpg" alt="product_image">
                            <div class="details">
                                <p class="date">Date: 2023-12-29</p>
                                <p class="product-id">Product ID: 1627</p>
                                <p class="item-name">Custom Printed Black Mug</p>
                            </div>
                            <ul class="options">
                                <li>Packaging: Not Wrapped</li>
                                <li>
                                    Image:
                                    <img src="../../images/uploads/spiderman-sticker.jpg">
                                    <a href="../../images/uploads/spiderman-sticker.jpg" download>Download</a>
                                </li>
                                <li>Comments: Set a margin at least half an inch around the image</li>
                            </ul>
                            <div class="pricing">
                                <p class="qty">Quantity: 2</p>
                                <p class="price">Rs. 2800</p>
                            </div>
                        </div>
                        <form class="status">
                            <div>
                                <input type="radio" name="user-order-status-5678" id="userOrderStatusDeclined5678"
                                    value="declined">
                                <label for="userOrderStatusDeclined5678">Declined</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-5678" id="userOrderStatusConfirmed5678"
                                    value="confirmed">
                                <label for="userOrderStatusConfirmed5678">Confirmed</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-5678" id="userOrderStatusProcessing5678"
                                    value="processing">
                                <label for="userOrderStatusProcessing5678">Processing</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-5678" id="userOrderStatusDispatched5678"
                                    value="dispatched">
                                <label for="userOrderStatusDispatched5678">Dispatched</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-5678" id="userOrderStatusDelivered5678"
                                    value="delivered" checked>
                                <label for="userOrderStatusDelivered5678">Delivered</label>
                            </div>

                            <input type="submit" value="Saved!" id="userOrderStatusSave5678">
                        </form>
                    </div>
                </div>
            </div>



        </div>


    </div>

    <script src="./userOrders.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>