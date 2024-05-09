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

            <!-- Users -->
            <div class="users">
                <h1>Users</h1>
                <form class="search" method="get" action="./index.php">
                    <input type="text" name="search" placeholder="Search users">
                </form>
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

                        <?php
                            include '../../library/sql/dbconn.php';

                            if (!isset($_GET['search'])) {
                                $sql = "SELECT id, fname, lname FROM users WHERE status != 'deleted'";
                            } else {
                                $key = $_GET['search'];
                                $sql = "SELECT id, fname, lname FROM users WHERE status != 'deleted' AND (id LIKE '%$key%' OR fname LIKE '%$key%' OR lname LIKE '%$key%')";
                            }
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr class="user-info" data-user-id="<?php echo $row['id']; ?>">
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fname'] . ' ' . $row['lname']; ?></td>
                            <td><a href="./userorders.php?id=<?php echo $row['id']; ?>" class="orders">Orders</a></td>
                            <td><a href="./userprofile.php?id=<?php echo $row['id']; ?>" class="view-profile">Profile</a></td>
                            <td><a href="./edituserprofile.php?id=<?php echo $row['id']; ?>" class="edit-profile"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                                <p class="delete-profile"><i class="fa-solid fa-trash"></i></p>
                            </td>
                        </tr>
                        <?php }} ?>

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