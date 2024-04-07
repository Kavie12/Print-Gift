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


        <!-- Login Content -->
        <div class="login-content">

            <div class="login-section">
                <h1>Login</h1>
                <form class="login-card" id="loginForm" action="" method="post">
                    <div>
                        <label for="loginEmail">Email</label>
                        <input type="email" name="email" id="loginEmail" placeholder="Enter yout email" required>
                    </div>
                    <div>
                        <label for="loginPassword">Password</label>
                        <input type="password" name="password" id="loginPassword" placeholder="Enter your password"
                            required>
                    </div>
                    <button type="submit" id="loginSubmit">Login</button>
                    <p id="loginCardMsg">If you do not have an account yet, <a href="../signup/">click here</a> to
                        register!</p>
                </form>
            </div>

        </div>




    </div>

    <script src="./script.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>