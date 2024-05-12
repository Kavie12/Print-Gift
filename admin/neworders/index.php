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

<body data-page='neworders'>
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
                <form class="search" method="get" action="./index.php">
                    <input type="text" name="search" placeholder="Search orders">
                </form>
                <div class="new-orders-list">
                    <div class="no-new-orders" id="noNewOrdersMsg">
                        <h2>No New Orders to Display</h2>
                    </div>

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
                                        users.address as address
                                    FROM ((`orders`
                                    INNER JOIN `items` ON orders.pid = items.id)
                                    INNER JOIN `users` ON orders.uid = users.id)
                                    WHERE orders.status = 'pending'";
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
                                users.address as address
                            FROM ((`orders`
                            INNER JOIN `items` ON orders.pid = items.id)
                            INNER JOIN `users` ON orders.uid = users.id)
                            WHERE orders.status = 'pending'
                            AND (items.title LIKE '%$key%'
                            OR orders.text LIKE '%$key%'
                            OR users.fname LIKE '%$key%'
                            OR users.lname LIKE '%$key%')";
                        }
                    
                        $result = mysqli_query($conn, $sql);
                    
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="item">
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
                                <p>User Name: <?php echo $row['fname'] . ' ' . $row['lname']; ?></p>
                                <p>Address: <?php echo $row['address']; ?></p>
                            </div>
                            <div class="pricing">
                                <p class="qty">Quantity: <?php echo $row['qty']; ?></p>
                                <p class="price">Rs. <?php echo $row['qty'] * $row['price']; ?></p>
                            </div>
                        </div>
                        <div class="approval">
                            <button class="accept"><i class="fa-solid fa-check"></i></button>
                            <button class="decline"><i class="fa-solid fa-xmark"></i></button>
                        </div>
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