<?php
    session_start();
    include '../../library/sql/AdminNoAccess.php';
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

<body>
    <div class="container">


        <?php
            include '../../library/AdminNavbar.php';
        ?>


        <!-- Login Content -->
        <div class="login-content">

            <div class="login-section">
                <h1>Login</h1>
                <form class="login-card" id="loginForm" action="./sql/login.php" method="post">
                    <div>
                        <label for="loginUsername">Username</label>
                        <input type="text" name="username" id="loginUsername" placeholder="Enter your username">
                    </div>
                    <div>
                        <label for="loginPassword">Password</label>
                        <input type="password" name="password" id="loginPassword" placeholder="Enter your password">
                    </div>
                    <button type="submit" id="loginSubmit" name="submit">Login</button>
                    <p id="loginCardMsg">If you do not have an account yet, <a href="../signup/">click here</a> to
                        register!</p>
                </form>
            </div>

        </div>


    </div>

    <script src="./script.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>