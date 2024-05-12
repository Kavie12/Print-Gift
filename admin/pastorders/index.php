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

<body data-page='pastorders'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- Past Orders -->
            <div class="past-orders">
                <h1>Past Orders</h1>
                <form class="search" method="get" action="./index.php">
                    <input type="text" name="search" placeholder="Search orders">
                </form>
                <div class="past-orders-list">

                    <?php
                        include '../../library/sql/dbconn.php';

                        if (!isset($_GET['search'])) {
                            $sql = "SELECT
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
                                        users.fname as fname,
                                        users.lname as lname,
                                        orders.status as status,
                                        users.address as address
                                    FROM ((`orders`
                                    INNER JOIN `items` ON orders.pid = items.id)
                                    INNER JOIN `users` ON orders.uid = users.id)
                                    WHERE orders.status != 'pending'
                                    ORDER BY orders.id DESC";
                        } else {
                            $key = $_GET['search'];

                            $sql = "SELECT
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
                                users.fname as fname,
                                users.lname as lname,
                                orders.status as status,
                                users.address as address
                            FROM ((`orders`
                            INNER JOIN `items` ON orders.pid = items.id)
                            INNER JOIN `users` ON orders.uid = users.id)
                            WHERE orders.status != 'pending'
                            AND (items.title LIKE '%$key%'
                            OR orders.text LIKE '%$key%'
                            OR orders.id LIKE '%$key%')
                            ORDER BY orders.id DESC";
                        }
                    
                        $result = mysqli_query($conn, $sql);
                    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
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
                                <li>Packaging: <?php echo (($row['wrap']) ? 'Wrapped' : 'Not Wrapped'); ?></li>
                                <li>Text: "<?php echo $row['text']; ?>"</li>
                                <li>Color: <div class="color" style="background-color: <?php echo $row['color']; ?>;"></div></li>

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
                            <div class="user">
                                <p>User ID: <?php echo $row['uid']; ?></p>
                                <p>User Name: <?php echo $row['fname'] . ' ' . $row['lname'];; ?></p>
                                <p>Address: <?php echo $row['address']; ?></p>
                            </div>
                            <div class="pricing">
                                <p class="qty">Quantity: <?php echo $row['qty']; ?></p>
                                <p class="price">Rs. <?php echo $row['price'] * $row['qty'];; ?></p>
                            </div>
                        </div>
                        <form class="status">
                            <div>
                                <input type="radio" name="past-order-status-<?php echo $row['id']; ?>" id="pastOrderStatusDeclined<?php echo $row['id']; ?>"
                                    value="declined" <?php echo (($row['status'] == 'declined') ? 'checked' : null); ?>>
                                <label for="pastOrderStatusDeclined<?php echo $row['id']; ?>">Declined</label>
                            </div>
                            <div>
                                <input type="radio" name="past-order-status-<?php echo $row['id']; ?>" id="pastOrderStatusConfirmed<?php echo $row['id']; ?>"
                                    value="confirmed" <?php echo (($row['status'] == 'confirmed') ? 'checked' : null); ?>>
                                <label for="pastOrderStatusConfirmed<?php echo $row['id']; ?>">Confirmed</label>
                            </div>
                            <div>
                                <input type="radio" name="past-order-status-<?php echo $row['id']; ?>" id="pastOrderStatusProcessing<?php echo $row['id']; ?>"
                                    value="processing" <?php echo (($row['status'] == 'processing') ? 'checked' : null); ?>>
                                <label for="pastOrderStatusProcessing<?php echo $row['id']; ?>">Processing</label>
                            </div>
                            <div>
                                <input type="radio" name="past-order-status-<?php echo $row['id']; ?>" id="pastOrderStatusDispatched<?php echo $row['id']; ?>"
                                    value="dispatched" <?php echo (($row['status'] == 'dispatched') ? 'checked' : null); ?>>
                                <label for="pastOrderStatusDispatched<?php echo $row['id']; ?>">Dispatched</label>
                            </div>
                            <div>
                                <input type="radio" name="past-order-status-<?php echo $row['id']; ?>" id="pastOrderStatusDelivered<?php echo $row['id']; ?>"
                                    value="delivered" <?php echo (($row['status'] == 'delivered') ? 'checked' : null); ?>>
                                <label for="pastOrderStatusDelivered<?php echo $row['id']; ?>">Delivered</label>
                            </div>

                            <input type="submit" value="Saved!" id="pastOrderStatusSave<?php echo $row['id']; ?>">
                        </form>
                    </div>
                    <?php }} ?>

                </div>
            </div>



        </div>


    </div>

    <script src="./script.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>