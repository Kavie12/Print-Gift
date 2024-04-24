<?php
    session_start();
    include '../../library/sql/AdminGuestNoAccess.php';

    include '../../library/sql/dbconn.php';
    $sql = "SELECT id, img, title, category, description, price, status FROM items WHERE status != 'removed'";
    $result = mysqli_query($conn, $sql);
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

<body data-page='products'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- Products -->
            <div class="products">
                <h1>Products</h1>
                <div class="search">
                    <input type="text" placeholder="Search products">
                </div>
                <div class="add-product-btn">
                    <a href="./addproduct.php">Add Product</a>
                </div>
                <div class="products-list">

                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="item" data-product-id="<?php echo $row['id']; ?>">
                        <div class="item-info">
                            <p class="product-id">Product ID: <?php echo $row['id']; ?></p>
                            <img src="../../images/uploads/items/<?php echo $row['img']; ?>" alt="image">
                            <p class="item-name"><?php echo $row['title']; ?></p>
                            <p class="item-category">Category - 
                                <?php
                                    echo
                                        $row['category'] == 'mug' ? 'Mug'
                                            :
                                            ($row['category'] == 'pen' ? 'Pen'
                                                : ($row['category'] == 't-shirt' ? 'T-Shirt'
                                                : ($row['category'] == 'wrist-band' ? 'Wrist Band'
                                                : 'Error'))) ;
                                ?>
                            </p>
                            <p class="item-desc"><?php echo $row['description']; ?></p>
                            <p class="price">Rs. <?php echo $row['price']; ?></p>
                            <div class="buttons">
                                <a href="./editproduct.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <form class="status">
                            <div>
                                <input type="radio" name="product-status-<?php echo $row['id']; ?>" id="productStatusInStock<?php echo $row['id']; ?>"
                                    value="instock" <?php echo ($row['status'] == 'instock') ? 'checked' : null; ?>>
                                <label for="productStatusInStock<?php echo $row['id']; ?>">In Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-<?php echo $row['id']; ?>" id="productStatusOutOfStock<?php echo $row['id']; ?>"
                                    value="outofstock" <?php echo ($row['status'] == 'outofstock') ? 'checked' : null; ?>>
                                <label for="productStatusOutOfStock<?php echo $row['id']; ?>">Out of Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-<?php echo $row['id']; ?>" id="productStatusHide<?php echo $row['id']; ?>" value="hide" <?php echo ($row['status'] == 'hide') ? 'checked' : null; ?>>
                                <label for="productStatusHide<?php echo $row['id']; ?>">Hide</label>
                            </div>

                            <input type="submit" value="Saved!" id="productStatusSave<?php echo $row['id']; ?>">
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