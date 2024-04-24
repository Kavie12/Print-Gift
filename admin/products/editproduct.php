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

            <!-- Edit User -->
            <div class="edit-product">
                <h1>Edit Product</h1>
                <div class="edit-product-section">
                    <a href="../products/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <form class="edit-product-card" id="editProductForm" enctype="multipart/form-data" method="POST" action="./sql/editproduct.php?id=<?php echo $_GET['id']; ?>">
                        <div>
                            <label for="editProductTitle">Product Title</label>
                            <input type="text" name="title" id="editProductTitle" placeholder="Enter product title">
                        </div>
                        <div>
                            <label for="editProductCategory">Product Category</label>
                            <select name="category" id="editProductCategory">
                                <option value="mug">Mug</option>
                                <option value="pen">Pen</option>
                                <option value="t-shirt">T-Shirt</option>
                                <option value="wrist-band">Wrist Band</option>
                            </select>
                        </div>
                        <div>
                            <label for="editProductDesc">Product Description</label>
                            <textarea name="desc" id="editProductDesc"
                                placeholder="edit product description"></textarea>
                        </div>
                        <div>
                            <label for="editProductPrice">Unit Price (Rs.)</label>
                            <input type="number" name="price" id="editProductPrice" placeholder="Enter product price">
                        </div>
                        <div>
                            <label for="editProductImage">Add New Image</label>
                            <input type="file" accept="image/*" name="image" id="editProductImage">
                        </div>
                        <button type="submit" id="editProductSubmit" name="submit">Edit</button>
                        <p id="editProductCardMsg"></p>
                    </form>
                </div>
            </div>



        </div>


    </div>

    <script src="./editProduct.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>