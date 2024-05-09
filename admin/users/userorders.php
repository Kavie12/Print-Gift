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

                <?php
                    include '../../library/sql/dbconn.php';
                    $uid = $_GET['id'];
                    $sql = "SELECT fname, lname FROM users WHERE id = '$uid'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <h1>Orders of <?php echo $row['fname'] . ' ' . $row['lname']; ?></h1>
                <?php } ?>

                <div class="back-btn-and-search">
                    <a href="../users/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
                <div class="user-orders-list">

                    <?php                    
                        $sql2 = "SELECT
                                    orders.id as id,
                                    items.id as pid,
                                    orders.uid as uid,
                                    orders.add_date as date,
                                    items.title as title,
                                    orders.wrap as wrap,
                                    orders.text as text,
                                    orders.color as color,
                                    orders.comments as comments,
                                    items.img as product_img,
                                    orders.img as printing_img,
                                    orders.qty as qty,
                                    items.price as price,
                                    orders.status as status
                                    FROM `orders`
                                    INNER JOIN `items` ON orders.pid = items.id
                                    WHERE orders.uid = '$uid' AND orders.status != 'pending'";
                    
                        $result2 = mysqli_query($conn, $sql2);
                    
                        if (mysqli_num_rows($result2) > 0) {
                            while ($row = mysqli_fetch_assoc($result2)) {
                    ?>
                    <div class="item" data-order-id="<?php echo $row['id']; ?>">
                        <div class="item-info">
                            <p class="order-id">Order ID: <?php echo $row['id']; ?></p>
                            <img src="../../images/uploads/items/<?php echo $row['product_img']; ?>" alt="image">
                            <div class="details">
                                <p class="date">Date: <?php echo $row['date']; ?></p>
                                <p class="product-id">Product ID: <?php echo $row['pid']; ?></p>
                                <p class="item-name"><?php echo $row['title']; ?></p>
                            </div>
                            <ul class="options">
                                <li>Packaging: <?php echo (($row['wrap']) ? 'Wrapped' : null); ?></li>
                                <li>Text: "<?php echo $row['text']; ?>"</li>
                                <li>Color: <div class="color <?php echo $row['color']; ?>"></div></li>

                                <?php
                                    if ($row['printing_img'] !== "") {
                                ?>
                                <li>
                                    Image:
                                    <img src="../../images/uploads/printing_images/<?php echo $row['printing_img']; ?>">
                                    <a href="../../images/uploads/printing_images/<?php echo $row['printing_img']; ?>" download>Download</a>
                                </li>
                                <?php } ?>

                                <li>Comments: <?php echo $row['comments']; ?></li>
                            </ul>
                            <div class="pricing">
                                <p class="qty">Quantity: <?php echo $row['qty']; ?></p>
                                <p class="price">Rs. <?php echo $row['price'] * $row['qty']; ?></p>
                            </div>
                        </div>
                        <form class="status">
                            <div>
                                <input type="radio" name="user-order-status-<?php echo $row['id']; ?>" id="userOrderStatusDeclined<?php echo $row['id']; ?>"
                                    value="declined" <?php echo (($row['status'] == 'declined') ? 'checked' : null); ?>>
                                <label for="userOrderStatusDeclined<?php echo $row['id']; ?>">Declined</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-<?php echo $row['id']; ?>" id="userOrderStatusConfirmed<?php echo $row['id']; ?>"
                                    value="confirmed" <?php echo (($row['status'] == 'confirmed') ? 'checked' : null); ?>>
                                <label for="userOrderStatusConfirmed<?php echo $row['id']; ?>">Confirmed</label>
                            </div>
                            <div>
                                <input type="radio" name="user-order-status-<?php echo $row['id']; ?>" id="userOrderStatusProcessing<?php echo $row['id']; ?>"
                                    value="processing" <?php echo (($row['status'] == 'processing') ? 'checked' : null); ?>>
                                <label for="userOrderStatusProcessing<?php echo $row['id']; ?>">Processing</label>

                            </div>
                            <div>
                                <input type="radio" name="user-order-status-<?php echo $row['id']; ?>" id="userOrderStatusDispatched<?php echo $row['id']; ?>"
                                    value="dispatched" <?php echo (($row['status'] == 'dispatched') ? 'checked' : null); ?>>
                                <label for="userOrderStatusDispatched<?php echo $row['id']; ?>">Dispatched</label>

                            </div>
                            <div>
                                <input type="radio" name="user-order-status-<?php echo $row['id']; ?>" id="userOrderStatusDelivered<?php echo $row['id']; ?>"
                                    value="delivered" <?php echo (($row['status'] == 'delivered') ? 'checked' : null); ?>>
                                <label for="userOrderStatusDelivered<?php echo $row['id']; ?>">Delivered</label>
                            </div>

                            <input type="submit" value="Saved!" id="userOrderStatusSave<?php echo $row['id']; ?>">
                        </form>
                    </div>
                    <?php }} ?>

                </div>
            </div>



        </div>


    </div>

    <script src="./userOrders.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>