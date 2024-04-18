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


        <!-- Sign Up Content -->
        <div class="signup-content">

            <div class="signup-section">
                <h1>Sign Up</h1>
                <form class="signup-card" id="signupForm" action="./sql/register.php" method="post">
                    <div>
                        <label for="signUpFName">First Name</label>
                        <input type="text" name="fname" id="signUpFName" placeholder="Enter your first name">
                    </div>
                    <div>
                        <label for="signUpLName">Last Name</label>
                        <input type="text" name="lname" id="signUpLName" placeholder="Enter your last name">
                    </div>
                    <div>
                        <label for="signUpTel">Phone Number</label>
                        <input type="tel" name="tel" id="signUpTel" placeholder="Enter your phone number">
                    </div>
                    <div>
                        <label for="signUpDOB">Date of Birth</label>
                        <input type="date" name="dob" id="signUpDOB">
                    </div>
                    <div class="address-field">
                        <label for="signUpAddress">Address</label>
                        <input type="text" name="address" id="signUpAddress" placeholder="Enter your address">
                    </div>
                    <div>
                        <label for="signUpCity">City</label>
                        <input type="text" name="city" id="signUpCity" placeholder="Enter your city">
                    </div>
                    <div>
                        <label for="signUpPostalCode">Postal Code</label>
                        <input type="text" name="postalcode" id="signUpPostalCode" placeholder="Enter your postal code">
                    </div>
                    <div class="email-field">
                        <label for="signUpEmail">Email</label>
                        <input type="email" name="email" id="signUpEmail" placeholder="Enter yout email">
                    </div>
                    <div>
                        <label for="signUpPassword">Password</label>
                        <input type="password" name="password" id="signUpPassword" placeholder="Enter your password">
                    </div>
                    <div>
                        <label for="signUpConfirmPassword">Confirm Password</label>
                        <input type="password" name="confirm-password" id="signUpConfirmPassword"
                            placeholder="Confirm your password">
                    </div>
                    <div class="agree-terms-field">
                        <input type="checkbox" name="agree-terms" id="signUpAgreeTerms">
                        <label for="signUpAgreeTerms">I hereby agree to terms and conditions</label>
                    </div>
                    <button type="submit" id="signUpSubmit" name="submit">Sign Up</button>
                    <p id="signUpCardMsg">If you have already registered, <a href="../login/">click here</a> to
                        login!</p>
                </form>
            </div>

        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>


    </div>

    <script src="./script.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>