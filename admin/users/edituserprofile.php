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

<body data-page='users'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- Edit User Profile -->
            <div class="edit-user-profile">
                <h1 id="header"></h1>
                <form class="edit-profile-details" id="adminEditUserForm" method="POST" action="./sql/edituserdetails.php?id=<?php echo $_GET['id']; ?>">
                    <a href="./userprofile.php?id=<?php echo $_GET['id']; ?>" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <div>
                        <label for="adminEditUserProfileFName">First Name</label>
                        <input type="text" name="fname" id="adminEditUserProfileFName">
                    </div>
                    <div>
                        <label for="adminEditUserProfileLName">Last Name</label>
                        <input type="text" name="lname" id="adminEditUserProfileLName">
                    </div>
                    <div>
                        <label for="adminEditUserProfileTel">Phone Number</label>
                        <input type="tel" name="tel" id="adminEditUserProfileTel">
                    </div>
                    <div>
                        <label for="adminEditUserProfileDOB">Date of Birth</label>
                        <input type="date" name="dob" id="adminEditUserProfileDOB">
                    </div>
                    <div class="address-field">
                        <label for="adminEditUserProfileAddress">Address</label>
                        <input type="text" name="address" id="adminEditUserProfileAddress">
                    </div>
                    <div>
                        <label for="adminEditUserProfileCity">City</label>
                        <input type="text" name="city" id="adminEditUserProfileCity">
                    </div>
                    <div>
                        <label for="adminEditUserProfilePostalCode">Postal Code</label>
                        <input type="text" name="postalcode" id="adminEditUserProfilePostalCode">
                    </div>
                    <div>
                        <label for="adminEditUserProfilePassword">New Password (If required)</label>
                        <input type="password" name="password" id="adminEditUserProfilePassword"
                            placeholder="Enter password">
                    </div>
                    <div>
                        <label for="adminEditUserProfileConfirmPassword">Confirm Password</label>
                        <input type="password" name="confirm-password" id="adminEditUserProfileConfirmPassword"
                            placeholder="Confirm password">
                    </div>

                    <input type="submit" name="submit" value="Save">
                    <p id="adminEditUserCardMsg"></p>
                </form>
            </div>
        </div>



    </div>


    </div>

    <script src="./editUserProfile.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>