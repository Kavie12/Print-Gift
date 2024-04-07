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

            <!-- Users -->
            <div class="users">
                <h1>Users</h1>
                <div class="search">
                    <input type="text" placeholder="Search users">
                </div>
                <div class="add-user-btn">
                    <a href="./adduser.php">Add User</a>
                </div>
                <div class="users-list">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tr class="user-info" data-user-id="8792">
                            <td>8792</td>
                            <td>Peter Parker</td>
                            <td><a href="./userorders.php" class="orders">Orders</a></td>
                            <td><a href="./userprofile.php" class="view-profile">Profile</a></td>
                            <td><a href="./edituserprofile.php" class="edit-profile"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                                <p class="delete-profile"><i class="fa-solid fa-trash"></i></p>
                            </td>
                        </tr>
                        <tr class="user-info" data-user-id="6792">
                            <td>6792</td>
                            <td>Donald Trump</td>
                            <td><a href="./userorders.php" class="orders">Orders</a></td>
                            <td><a href="./userprofile.php" class="view-profile">Profile</a></td>
                            <td><a href="./edituserprofile.php" class="edit-profile"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                                <p class="delete-profile"><i class="fa-solid fa-trash"></i></p>
                            </td>
                        </tr>
                        <tr class="user-info" data-user-id="3126">
                            <td>3126</td>
                            <td>Albert Einstein</td>
                            <td><a href="./userorders.php" class="orders">Orders</a></td>
                            <td><a href="./userprofile.php" class="view-profile">Profile</a></td>
                            <td><a href="./edituserprofile.php" class="edit-profile"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                                <p class="delete-profile"><i class="fa-solid fa-trash"></i></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>



        </div>


    </div>

    <script src="./users.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>