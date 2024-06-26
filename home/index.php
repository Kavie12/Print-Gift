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


        <!-- Home Content -->
        <div class="home-content" id="home">

            <div class="home-msg">
                <img src="../images/home_mug_pic.png" alt="img">
                <h1>
                    Customize a Gift
                    <br>
                    for a
                    <span>Memorable Moment</span>
                </h1>
                <a href="../products/">Explore</a>
            </div>


            <div class="home-products">
                <h2>Best Selling Products</h2>
                <div class="product-list">
                    <a href="../products/index.php?filter=mugs" class="product-item">
                        <img src="../images/about-img-1.jpg" alt="img">
                        <span>Mugs</span>
                    </a>
                    <a href="../products/index.php?filter=tshirts" class="product-item">
                        <img src="../images/about-img-2.jpg" alt="img">
                        <span>T-Shirts</span>
                    </a>
                    <a href="../products/index.php?filter=pens" class="product-item">
                        <img src="../images/product-img-1.jpg" alt="img">
                        <span>Pens</span>
                    </a>
                    <a href="../products/index.php?filter=bands" class="product-item">
                        <img src="../images/product-img-2.jpg" alt="img">
                        <span>Wrist Bands</span>
                    </a>
                </div>
            </div>



            <div class="about-us-section" id="about">
                <h2>About Us</h2>
                <div class="about-us-card">
                    <p>
                        We are a digital printing company that prints customized design on various kinds of items. We
                        allow customers to customize the products they choose on our platform, get it printed and get
                        delivered.
                    </p>
                    <div class="services">
                        <h3>We offer you,</h3>
                        <div class="service-list">
                            <span><i class="fa-regular fa-circle-check"></i>A Personalized Design</span>
                            <span><i class="fa-regular fa-circle-check"></i>The Best Quality Products</span>
                            <span><i class="fa-regular fa-circle-check"></i>Cheaper Prices</span>
                            <span><i class="fa-regular fa-circle-check"></i>Faster Delivery Service</span>
                        </div>
                    </div>
                    <div class="img-list">
                        <img src="../images/about-img-1.jpg" alt="img">
                        <img src="../images/about-img-2.jpg" alt="img">
                    </div>
                    <a href="../products/" class="explore-btn">Explore</a>
                    <div class="faq">
                        <h3>FAQ</h3>
                        <div class="faq-list">
                            
                            <?php
                                include '../library/sql/dbconn.php';
                                $sql = "SELECT question, answer FROM faq";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div>
                                <div>
                                    <button></button>
                                    <span><?php echo $row['question']; ?></span>
                                </div>
                                <p><?php echo $row['answer']; ?></p>
                            </div>
                            <?php }} ?>

                        </div>
                    </div>

                </div>
            </div>


            <!-- Footer -->
            <?php
                include '../library/Footer.php';
            ?>





        </div>




    </div>

    <script src="./script.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>