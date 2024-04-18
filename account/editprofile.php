<?php
    session_start();
    include '../library/sql/GuestNoAccess.php';
?>
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


        <!-- Account Content -->
        <div class="account-content">

            <div class="account-section">
                <div class="links">
                    <a href="../account/" class="active">My Profile</a>
                    <a href="./recentorders.php">Recent Orders</a>
                </div>
                <div class="details">
                    <a href="../account/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h1>Edit Profile</h1>
                    <form class="edit-profile-details" id="editProfileForm" action="./sql/edituserdetails.php" method="POST">
                        <div>
                            <label for="editProfileFName">First Name</label>
                            <input type="text" name="fname" id="editProfileFName">
                        </div>
                        <div>
                            <label for="editProfileLName">Last Name</label>
                            <input type="text" name="lname" id="editProfileLName">
                        </div>
                        <div>
                            <label for="editProfileTel">Phone Number</label>
                            <input type="tel" name="tel" id="editProfileTel">
                        </div>
                        <div>
                            <label for="editProfileDOB">Date of Birth</label>
                            <input type="date" name="dob" id="editProfileDOB">
                        </div>
                        <div class="address-field">
                            <label for="editProfileAddress">Address</label>
                            <input type="text" name="address" id="editProfileAddress">
                        </div>
                        <div>
                            <label for="editProfileCity">City</label>
                            <input type="text" name="city" id="editProfileCity">
                        </div>
                        <div>
                            <label for="editProfilePostalCode">Postal Code</label>
                            <input type="text" name="postalcode" id="editProfilePostalCode">
                        </div>
                        <div>
                            <label for="editProfilePassword">New Password (If Required)</label>
                            <input type="password" name="password" id="editProfilePassword"
                                placeholder="Enter new password">
                        </div>
                        <div>
                            <label for="editProfileConfirmPassword">Confirm Password</label>
                            <input type="password" name="confirm-password" id="editProfileConfirmPassword"
                                placeholder="Confirm password">
                        </div>
                        <input type="submit" name="submit" id="editProfileSubmit" value="Save">
                        <p id="editProfileCardMsg"></p>
                    </form>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>


    </div>

    <script src="./editProfile.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>