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

<body data-page='account'>
    <div class="container">


        <?php
            include '../../library/AdminNavbar.php';
            include '../../library/AdminSidebar.php';
        ?>

        <div class="admin-content">

            <!-- Login Content -->
            <div class="login-content">

                <div class="login-section">
                    <h1>Account Details</h1>
                    <form class="login-card" id="loginForm">
                        <div>
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" disabled>
                        </div>
                        <a href="./editpassword.php" type="button" id="editAccount">Edit Password</a>
                    </form>
                </div>

            </div>


        </div>




    </div>

    <script src="./script.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>