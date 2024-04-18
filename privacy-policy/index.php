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


        <!-- Policy Content -->
        <div class="policy-content">

            <div class="policy-section">
                <h2>Privacy Policy</h2>
                <div class="policy-card">
                    <p>
                        We understand the importance of your privacy and we are committed to protecting it. We collect
                        your name, address, email, phone number and all the order details and we use them to provide
                        service to the customers. As well as, all the password that has been entered through the system
                        are encrypted.
                    </p>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>




    </div>

    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>