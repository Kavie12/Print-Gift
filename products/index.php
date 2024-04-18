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
                        <a href="./item.php" class="product-item mug">
                            <img src="../images/home_mug_pic.png" alt="product_img">
                            <div class="product-details">
                                <h3>Custom Printed White Mug</h3>
                                <span>Rs. 1250</span>
                            </div>
                            <!-- Status is changed by JS -->
                            <p class="productsStatus"></p>
                        </a>
                        <a href="#" class="product-item mug">
                            <img src="../images/about-img-1.jpg" alt="product_img">
                            <div class="product-details">
                                <h3>Custom Printed Black Mug</h3>
                                <span>Rs. 1250</span>
                            </div>
                            <p class="productsStatus"></p>
                        </a>
                        <a href="#" class="product-item t-shirt out-of-stock">
                            <img src="../images/about-img-2.jpg" alt="product_img">
                            <div class="product-details">
                                <h3>Custom Printed Black T-shirt</h3>
                                <span>Rs. 1250</span>
                            </div>
                            <p class="productsStatus"></p>
                        </a>
                        <a href="#" class="product-item pen">
                            <img src="../images/product-img-1.jpg" alt="product_img">
                            <div class="product-details">
                                <h3>Custom Printed White Pen</h3>
                                <span>Rs. 1250</span>
                            </div>
                            <p class="productsStatus"></p>
                        </a>
                        <a href="#" class="product-item band">
                            <img src="../images/product-img-2.jpg" alt="product_img">
                            <div class="product-details">
                                <h3>Custom Printed Wrist Band</h3>
                                <span>Rs. 200</span>
                            </div>
                            <p class="productsStatus"></p>
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