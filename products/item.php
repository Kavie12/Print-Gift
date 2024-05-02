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


        <!-- Item Content -->
        <div class="item-content">

            <?php
                $id = $_GET['product'];

                include '../library/sql/dbconn.php';

                $sql = "SELECT img, title, description, price, status FROM items WHERE id = $id AND status != 'removed' AND status != 'hide'";

                $result = mysqli_query($conn, $sql);

                if (!(mysqli_num_rows($result) > 0)) {
                    header("Location: index.php");
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="item-tab" data-item-id="<?php echo $id; ?>">
                <a href="../products/" class="back-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <div class="item-image">
                    <img src="../images/uploads/items/<?php echo $row['img']; ?>" alt="item_image">
                </div>
                <div class="item-details">
                    <h1><?php echo $row['title']; ?></h1>
                    <p><?php echo $row['description']; ?></p>
                    <span>Rs. <?php echo $row['price']; ?></span>
                    <p class="availability">
                        <?php
                            if ($row['status'] == 'instock') {
                                echo '<i class="fa-solid fa-check"></i><span>In Stock</span>';
                            } else {
                                echo '<i class="fa-solid fa-circle"></i><span>Out of Stock</span>';
                            }
                        ?>
                    </p>
                    <form id="addToCartForm" action="./sql/addtocart.php?pid=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                        <div class="text">
                            <label for="printingText">
                                Enter Text if Required
                            </label>
                            <textarea name="printing_text" id="printingText"
                                placeholder="Enter text you want to get printed"></textarea>
                        </div>
                        <div class="options">
                            <span>Select Text Color</span>
                            <div class="options-list">
                                <div>
                                    <input type="radio" name="printing_text_color" id="printingTextColorBlack"
                                        value="black">
                                    <div></div>
                                </div>
                                <div>
                                    <input type="radio" name="printing_text_color" id="printingTextColorRed"
                                        value="red">
                                    <div></div>
                                </div>
                                <div>
                                    <input type="radio" name="printing_text_color" id="printingTextColorBlue"
                                        value="blue">
                                    <div></div>
                                </div>
                                <div>
                                    <input type="radio" name="printing_text_color" id="printingTextColorOrange"
                                        value="orange">
                                    <div></div>
                                </div>
                                <div>
                                    <input type="radio" name="printing_text_color" id="printingTextColorPurple"
                                        value="purple">
                                    <div></div>
                                </div>
                                <div>
                                    <input type="radio" name="printing_text_color" id="printingTextColorPink"
                                        value="pink">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="image">
                            <label for="printingImage">
                                Upload Image if Required
                            </label>
                            <input type="file" accept="image/*" name="printing_image" id="printingImage">
                        </div>
                        <div class="wrap">
                            <input type="checkbox" name="item_wrap" id="itemWrap">
                            <label for="itemWrap">
                                Wrap (+ Rs. 100)
                            </label>
                        </div>
                        <div class="additional_info">
                            <label for="additionalInfo">
                                Additional Information
                            </label>
                            <textarea name="additional_info" id="additionalInfo"
                                placeholder="Describe how your design should be printed"></textarea>
                        </div>
                        <div class="qty">
                            <input type="number" name="item_qty" id="itemQty" value="1">
                            <div>
                                <i class="fa-solid fa-angle-up" id="itemIncreaseQty"></i>
                                <i class="fa-solid fa-angle-down" id="itemDecreaseQty"></i>
                            </div>
                        </div>
                        <input type="submit" value="Add to Cart" <?php echo ($row['status'] == 'outofstock') ? 'disabled' : null ?>>
                        <p class="add-to-cart-msg" id="addToCartMsg"></p>
                    </form>
                </div>
                <?php }} ?>
            </div>

        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>



    </div>

    <script src="./item.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>