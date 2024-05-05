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
    <link rel="stylesheet" href="./account.css">
    <link rel="stylesheet" href="../../library/global.css">
    <link rel="stylesheet" href="../../library/admin.css">
</head>

<body data-page='settings'>
    <div class="container">


        <?php
            include '../../library/AdminNavbar.php';
            include '../../library/AdminSidebar.php';
        ?>

        <div class="admin-content">

            <!-- Delivery Content -->
            <div class="login-content">

                <div class="login-section">
                    <h1>Delivery Price</h1>
                    <form class="login-card" id="loginForm">
                        <a href="./" class="back-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                        <div>
                            <label for="delivery">Delivery Price (Rs.)</label>
                            <input type="text" name="delivery" id="delivery" disabled>
                        </div>
                        <a href="./changedeliveryprice.php" type="button" id="editAccount">Change Price</a>
                    </form>
                </div>

            </div>


        </div>




    </div>

    <script src="./delivery.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>