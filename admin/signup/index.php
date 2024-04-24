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


        <!-- Sign Up Content -->
        <div class="signup-content">

            <div class="signup-section">
                <h1>Sign Up</h1>
                <form class="signup-card" id="signupForm" action="./sql/register.php" method="post">
                    <div>
                        <label for="signUpUsername">Username</label>
                        <input type="text" name="username" id="signUpUsername" placeholder="Create a username">
                    </div>
                    <div>
                        <label for="signUpPassword">Password</label>
                        <input type="password" name="password" id="signUpPassword" placeholder="Create a password">
                    </div>
                    <div>
                        <label for="signUpConfirmPassword">Confirm Password</label>
                        <input type="password" name="confirm_password" id="signUpConfirmPassword" placeholder="Confirm password">
                    </div>
                    <button type="submit" id="signUpSubmit" name="submit">Sign Up</button>
                    <p id="signUpCardMsg">If you have already registered, <a href="../login/">click here</a> to
                        login!</p>
                </form>
            </div>

        </div>


    </div>

    <script src="./script.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>