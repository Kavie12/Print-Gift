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

<body data-page='products'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- Add User -->
            <div class="add-product">
                <h1>Add Product</h1>
                <div class="add-product-section">
                    <a href="../products/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <form class="add-product-card" id="addProductForm" action="./sql/addproduct.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <label for="addProductTitle">Product Title</label>
                            <input type="text" name="title" id="addProductTitle" placeholder="Enter product title">
                        </div>
                        <div>
                            <label for="addProductCategory">Product Category</label>
                            <select name="category" id="addProductCategory">
                                <option value="none">Select category</option>
                                <option value="mug">Mug</option>
                                <option value="pen">Pen</option>
                                <option value="t-shirt">T-Shirt</option>
                                <option value="wrist-band">Wrist Band</option>
                            </select>
                        </div>
                        <div>
                            <label for="addProductDesc">Product Description</label>
                            <textarea name="desc" id="addProductDesc" placeholder="Add product description"></textarea>
                        </div>
                        <div>
                            <label for="addProductPrice">Unit Price (Rs.)</label>
                            <input type="number" name="price" id="addProductPrice" placeholder="Enter product price"
                                value="0">
                        </div>
                        <div>
                            <label for="addProductImage">Add Image</label>
                            <input type="file" accept="image/*" name="image" id="addProductImage">
                        </div>
                        <button type="submit" id="addProductSubmit" name="submit">Add</button>
                        <p id="addProductCardMsg"></p>
                    </form>
                </div>
            </div>



        </div>


    </div>

    <script src="./addProduct.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>