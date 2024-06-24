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

<body data-page='statics'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- Statistics -->
            <div class="statistics">
                <h1>Statistics</h1>
                <div class="statistics-cards">
                    <div class="users">
                        <h3>Total Users</h3>
                        <span></span>
                    </div>
                    <div class="orders">
                        <h3>Total Orders</h3>
                        <span></span>
                    </div>
                    <div class="revenue">
                        <h3>Total Revenue</h3>
                        <span></span>
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