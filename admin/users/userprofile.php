<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT GIFT - Admin Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../library/admin.css">
</head>

<body>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- User Profile -->
            <div class="user-profile">
                <h1>Profile of Peter</h1>
                <div class="profile-details" data-user-id="1234">
                    <a href="../users/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <div>
                        <label for="adminUserProfileFName">First Name</label>
                        <input type="text" name="fname" id="adminUserProfileFName" value="Peter" disabled>
                    </div>
                    <div>
                        <label for="adminUserProfileLName">Last Name</label>
                        <input type="text" name="lname" id="adminUserProfileLName" value="Parker" disabled>
                    </div>
                    <div>
                        <label for="adminUserProfileTel">Phone Number</label>
                        <input type="tel" name="tel" id="adminUserProfileTel" value="0703467918" disabled>
                    </div>
                    <div>
                        <label for="adminUserProfileDOB">Date of Birth</label>
                        <input type="date" name="dob" id="adminUserProfileDOB" value="2005-04-12" disabled>
                    </div>
                    <div class="address-field">
                        <label for="adminUserProfileAddress">Address</label>
                        <input type="text" name="address" id="adminUserProfileAddress"
                            value="Peter Parker, 22/A/12, Alwis Road, Kaduwela" disabled>
                    </div>
                    <div>
                        <label for="adminUserProfileCity">City</label>
                        <input type="text" name="city" id="adminUserProfileCity" value="Kaduwela" disabled>
                    </div>
                    <div>
                        <label for="adminUserProfilePostalCode">Postal Code</label>
                        <input type="text" name="postalcode" id="adminUserProfilePostalCode" value="10640" disabled>
                    </div>
                    <div class="buttons">
                        <a href="./edituserprofile.html" class="edit">Edit Profile</a>
                        <span class="delete">Delete Account</span>
                    </div>
                </div>
            </div>
        </div>



    </div>


    </div>

    <script src="./userProfile.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>