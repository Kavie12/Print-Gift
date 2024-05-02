<?php session_start(); ?>
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


        <!-- Products Content -->
        <div class="products-content">
            <div class="products-tab">
                <div class="filters" id="productsFilters">
                    <div class="filters-sidebar-close" id="filtersSidebarClose">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div class="filter-section">
                        <h2>Category</h2>
                        <div class="categories-list">
                            <div>
                                <input type="radio" name="productCategories" id="productCategoriesAll" checked>
                                <label for="productCategoriesAll">All Products</label>
                            </div>
                            <div>
                                <input type="radio" name="productCategories" id="productCategoriesMugs">
                                <label for="productCategoriesMugs">Mugs</label>
                            </div>
                            <div>
                                <input type="radio" name="productCategories" id="productCategoriesPens">
                                <label for="productCategoriesPens">Pens</label>
                            </div>
                            <div>
                                <input type="radio" name="productCategories" id="productCategoriesTShirts">
                                <label for="productCategoriesTShirts">T-Shirts</label>
                            </div>
                            <div>
                                <input type="radio" name="productCategories" id="productCategoriesBands">
                                <label for="productCategoriesBands">Wrist Bands</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-section">
                        <h2>Filters</h2>
                        <div class="filters-list">
                            <div class="filter-item">
                                <input type="checkbox" id="productsinStockFilter">
                                <label for="productsinStockFilter">In Stock</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products-section">
                    <button class="filters-sidebar-open" id="filtersSidebarOpen">Filters</button>
                    <div class="products-list">
                        <?php
                            include '../library/sql/dbconn.php';

                            $sql = "SELECT id, title, category, price, img, status FROM items WHERE status != 'removed' AND status != 'hide'";
                            
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <a href="./item.php?product=<?php echo $row['id']; ?>" class="product-item <?php echo $row['category']; echo ($row['status'] == 'outofstock') ? ' out-of-stock' : null ?>">
                            <img src="../images/uploads/items/<?php echo $row['img']; ?>" alt="product_img">
                            <div class="product-details">
                                <h3><?php echo $row['title']; ?></h3>
                                <span>Rs. <?php echo $row['price']; ?></span>
                            </div>
                            <!-- Status is changed by JS -->
                            <p class="productsStatus"></p>
                        <?php }} ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>



    </div>

    <script src="./products.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>