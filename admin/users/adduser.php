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

            <!-- Add User -->
            <div class="add-user">
                <h1>Add User</h1>
                <div class="add-user-section">
                    <a href="../users/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <form class="add-user-card" id="adminAddUserForm" action="./sql/adduser.php" method="post">
                        <div>
                            <label for="adminAddUserFName">First Name</label>
                            <input type="text" name="fname" id="adminAddUserFName" placeholder="Enter first name">
                        </div>
                        <div>
                            <label for="adminAddUserLName">Last Name</label>
                            <input type="text" name="lname" id="adminAddUserLName" placeholder="Enter last name">
                        </div>
                        <div>
                            <label for="adminAddUserTel">Phone Number</label>
                            <input type="tel" name="tel" id="adminAddUserTel" placeholder="Enter phone number">
                        </div>
                        <div>
                            <label for="adminAddUserDOB">Date of Birth</label>
                            <input type="date" name="dob" id="adminAddUserDOB">
                        </div>
                        <div class="address-field">
                            <label for="adminAddUserAddress">Address</label>
                            <input type="text" name="address" id="adminAddUserAddress" placeholder="Enter address">
                        </div>
                        <div>
                            <label for="adminAddUserCity">City</label>
                            <input type="text" name="city" id="adminAddUserCity" placeholder="Enter city">
                        </div>
                        <div>
                            <label for="adminAddUserPostalCode">Postal Code</label>
                            <input type="text" name="postalcode" id="adminAddUserPostalCode"
                                placeholder="Enter postal code">
                        </div>
                        <div class="email-field">
                            <label for="adminAddUserEmail">Email</label>
                            <input type="email" name="email" id="adminAddUserEmail" placeholder="Enter email">
                        </div>
                        <div>
                            <label for="adminAddUserPassword">Password</label>
                            <input type="password" name="password" id="adminAddUserPassword"
                                placeholder="Enter password">
                        </div>
                        <div>
                            <label for="adminAddUserConfirmPassword">Confirm Password</label>
                            <input type="password" name="confirm-password" id="adminAddUserConfirmPassword"
                                placeholder="Confirm password">
                        </div>
                        <button type="submit" id="adminAddUserSubmit" name="submit">Add User</button>
                        <p id="adminAddUserCardMsg"></p>
                    </form>
                </div>
            </div>



        </div>


    </div>

    <script src="./addUser.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>