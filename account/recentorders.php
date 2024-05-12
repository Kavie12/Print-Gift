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


        <!-- Account Content -->
        <div class="account-content">

            <div class="account-section">
                <div class="links">
                    <a href="../account/">My Profile</a>
                    <a href="recentorders.html" class="active">Recent Orders</a>
                </div>
                <div class="details">
                    <h1>Recent Orders</h1>
                    <p>*Note that delivery and wrapping charges are not shown here</p>
                    <div class="recent-orders-list">

                        <?php
                            include '../library/sql/dbconn.php';
                        
                            $uid = $_SESSION['user'];
                            $sql = "SELECT
                                        orders.id as id,
                                        orders.add_date as date,
                                        items.title as title,
                                        orders.wrap as wrap,
                                        orders.text as text,
                                        orders.color as color,
                                        orders.comments as comments,
                                        items.img as product_img,
                                        orders.img as printing_img,
                                        orders.status as status,
                                        orders.qty as qty,
                                        items.price as price
                                        FROM `orders`
                                        INNER JOIN `items` ON orders.pid = items.id
                                        WHERE orders.uid='$uid'";
                        
                            $result = mysqli_query($conn, $sql);
                        
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="item">
                            <div class="item-info">
                                <p class="order-id">Order ID: <?php echo $row['id']; ?></p>
                                <img src="../images/uploads/items/<?php echo $row['product_img']; ?>" alt="image">
                                <div class="order-details">
                                    <p class="date">Date: <?php echo $row['date']; ?></p>
                                    <p class="item-name"><?php echo $row['title']; ?></p>
                                </div>
                                <ul class="options">
                                    <li>Packaging: <?php echo (($row['wrap']) ? 'Wrapped' : 'Not Wrapped'); ?></li>
                                    <li>Text: "<?php echo $row['text']; ?>"</li>
                                    <li>Color: <div class="color" style="background-color: <?php echo $row['color']; ?>;"></div></li>

                                    <?php
                                        if ($row['printing_img'] !== "") {
                                    ?>
                                    <li>
                                        Image:
                                        <img src="../images/uploads/printing_images/<?php echo $row['printing_img']; ?>">
                                    </li>
                                    <?php } ?>

                                    <li>Comments: <?php echo $row['comments']; ?></li>
                                </ul>
                                <div class="status">
                                    <i class="fa-solid fa-truck"></i>
                                    <p><?php echo ucfirst($row['status']); ?></p>
                                </div>
                                <div class="pricing">
                                    <p class="qty">Quantity: <?php echo $row['qty']; ?></p>
                                    <p class="price">Rs. <?php echo $row['price'] * $row['qty']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php }} ?>

                    </div>
                </div>
            </div>

        </div>

        
        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>


    </div>

    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>