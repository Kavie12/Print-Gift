<?php
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
                <div class="details" data-user-id="1234">
                    <h1>My Profile</h1>
                    <div class="profile-details">
                        <div>
                            <label for="profileFName">First Name</label>
                            <input type="text" name="fname" id="profileFName" disabled>
                        </div>
                        <div>
                            <label for="profileLName">Last Name</label>
                            <input type="text" name="lname" id="profileLName" disabled>
                        </div>
                        <div>
                            <label for="profileTel">Phone Number</label>
                            <input type="tel" name="tel" id="profileTel" disabled>
                        </div>
                        <div>
                            <label for="profileDOB">Date of Birth</label>
                            <input type="date" name="dob" id="profileDOB" disabled>
                        </div>
                        <div class="address-field">
                            <label for="profileAddress">Address</label>
                            <input type="text" name="address" id="profileAddress" disabled>
                        </div>
                        <div>
                            <label for="profileCity">City</label>
                            <input type="text" name="city" id="profileCity" disabled>
                        </div>
                        <div>
                            <label for="profilePostalCode">Postal Code</label>
                            <input type="text" name="postalcode" id="profilePostalCode" disabled>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="./editprofile.php" class="edit">Edit Profile</a>
                        <a href="#" class="delete">Delete Account</a>
                    </div>
                </div>
            </div>

        </div>


        <!-- Footer -->
        <?php
            include '../library/Footer.php';
        ?>


    </div>

    <script src="./myProfile.js"></script>
    <script src="../library/global.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>