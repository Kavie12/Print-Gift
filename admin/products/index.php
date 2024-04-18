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

                    <div class="item" data-product-id="1234">
                        <div class="item-info">
                            <p class="product-id">Product ID: 1234</p>
                            <img src="../../images/home_mug_pic.png" alt="image">
                            <p class="item-name">Custom Printed White Mug</p>
                            <p class="item-category">Category - Mugs</p>
                            <p class="item-desc">Print your design on glassy white mug built with better quality</p>
                            <p class="price">Rs. 1100</p>
                            <div class="buttons">
                                <a href="./editproduct.php" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <form class="status">
                            <!-- Fix same ID and name issues -->
                            <div>
                                <input type="radio" name="product-status-1234" id="productStatusInStock1234"
                                    value="In Stock" checked>
                                <label for="productStatusInStock1234">In Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-1234" id="productStatusOutOfStock1234"
                                    value="Out of Stock">
                                <label for="productStatusOutOfStock1234">Out of Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-1234" id="productStatusHide1234" value="Hide">
                                <label for="productStatusHide1234">Hide</label>
                            </div>

                            <input type="submit" value="Saved!" id="productStatusSave1234">
                        </form>
                    </div>

                    <div class="item" data-product-id="5678">
                        <div class="item-info">
                            <p class="product-id">Product ID: 5678</p>
                            <img src="../../images/about-img-1.jpg" alt="image">
                            <p class="item-name">Custom Printed Black Mug</p>
                            <p class="item-category">Category - Mugs</p>
                            <p class="item-desc">Print your design on glassy black mug built with better quality</p>
                            <p class="price">Rs. 1100</p>
                            <div class="buttons">
                                <a href="./editproduct.php" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <form class="status">
                            <!-- Fix same ID and name issues -->
                            <div>
                                <input type="radio" name="product-status-5678" id="productStatusInStock5678"
                                    value="In Stock" checked>
                                <label for="productStatusInStock5678">In Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-5678" id="productStatusOutOfStock5678"
                                    value="Out of Stock">
                                <label for="productStatusOutOfStock5678">Out of Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-5678" id="productStatusHide5678" value="Hide">
                                <label for="productStatusHide5678">Hide</label>
                            </div>

                            <input type="submit" value="Saved!" id="productStatusSave5678">
                        </form>
                    </div>

                    <div class="item" data-product-id="4321">
                        <div class="item-info">
                            <p class="product-id">Product ID: 9999</p>
                            <img src="../../images/about-img-2.jpg" alt="image">
                            <p class="item-name">Custom Printed T shirt</p>
                            <p class="item-category">Category - T-Shirts</p>
                            <p class="item-desc">Print your design on glassy black mug built with better quality</p>
                            <p class="price">Rs. 1100</p>
                            <div class="buttons">
                                <a href="./editproduct.php" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <form class="status">
                            <!-- Fix same ID and name issues -->
                            <div>
                                <input type="radio" name="product-status-9999" id="productStatusInStock9999"
                                    value="In Stock" checked>
                                <label for="productStatusInStock9999">In Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-9999" id="productStatusOutOfStock9999"
                                    value="Out of Stock">
                                <label for="productStatusOutOfStock9999">Out of Stock</label>
                            </div>
                            <div>
                                <input type="radio" name="product-status-9999" id="productStatusHide9999" value="Hide">
                                <label for="productStatusHide9999">Hide</label>
                            </div>

                            <input type="submit" value="Saved!" id="productStatusSave9999">
                        </form>
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