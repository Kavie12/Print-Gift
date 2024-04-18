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

            <div class="item-tab" data-item-id="1234">
                <a href="../products/" class="back-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <div class="item-image">
                    <img src="../images/home_mug_pic.png" alt="item_image">
                </div>
                <div class="item-details">
                    <h1>Custom Printed White Mug</h1>
                    <p>Print your design on glassy white mug built with better quality</p>
                    <span>Rs. 1100</span>
                    <p class="availability"><i class="fa-solid fa-check"></i><span>In Stock</span></p>
                    <form id="addToCartForm" enctype="multipart/form-data">
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
                        <input type="submit" value="Add to Cart">
                    </form>
                </div>
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