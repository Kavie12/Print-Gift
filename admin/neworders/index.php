<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT GIFT - Admin Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../library/admin.css">
</head>

<body>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- New Orders -->
            <div class="new-orders">
                <h1>New Orders</h1>
                <div class="search">
                    <input type="text" placeholder="Search orders">
                </div>
                <div class="new-orders-list">
                    <div class="no-new-orders" id="noNewOrdersMsg">
                        <h2>No New Orders to Display</h2>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <p class="order-id">Order ID: 12189</p>
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
                            <div class="user">
                                <p>User ID: 293</p>
                                <p>User Name: Peter Parker</p>
                                <p>Address: 293/7, Kaduwela Rd, Malabe</p>
                            </div>
                            <div class="pricing">
                                <p class="qty">Quantity: 1</p>
                                <p class="price">Rs. 1100</p>
                            </div>
                        </div>
                        <div class="approval">
                            <button class="accept"><i class="fa-solid fa-check"></i></button>
                            <button class="decline"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-info">
                            <p class="order-id">Order ID: 7283</p>
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
                            <div class="user">
                                <p>User ID: 293</p>
                                <p>User Name: Peter Parker</p>
                                <p>Address: 293/7, Kaduwela Rd, Malabe</p>
                            </div>
                            <div class="pricing">
                                <p class="qty">Quantity: 2</p>
                                <p class="price">Rs. 2800</p>
                            </div>
                        </div>
                        <div class="approval">
                            <button class="accept"><i class="fa-solid fa-check"></i></button>
                            <button class="decline"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                </div>
            </div>



        </div>


    </div>

    <script src="./script.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>