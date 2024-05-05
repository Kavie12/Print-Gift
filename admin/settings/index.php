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
    <link rel="stylesheet" href="../../library/global.css">
    <link rel="stylesheet" href="../../library/admin.css">
</head>

<body data-page="settings">
    <div class="container">


        <?php
            include '../../library/AdminNavbar.php';
            include '../../library/AdminSidebar.php';
        ?>

        <div class="admin-content">

            <div class="settings">
                <h1>Settings</h1>

                <div class="option-list">
                    <a class="option" href="./account.php">
                        <i class="fa-solid fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a class="option" href="./delivery.php">
                        <i class="fa-solid fa-money-bill"></i>
                        <span>Delivery Charges</span>
                    </a>
                    <a class="option" href="./wrap.php">
                        <i class="fa-solid fa-gift"></i>
                        <span>Wrapping Prices</span>
                    </a>
                </div>
            </div>


        </div>




    </div>

    <script src="./script.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>