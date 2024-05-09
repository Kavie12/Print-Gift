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

<body data-page='faq'>
    <div class="container">

        <?php
            // Navbar
            include '../../library/AdminNavbar.php';
            // Sidebar
            include '../../library/AdminSidebar.php';
        ?>


        <div class="admin-content">

            <!-- FAQ -->
            <div class="faq">
                <h1>FAQ</h1>
                <div class="add-faq-btn">
                    <a href="./addfaq.php">Add FAQ</a>
                </div>
                <div class="faq-section">
                    <div class="faq-list">

                        <?php
                            include '../../library/sql/dbconn.php';

                            $sql = "SELECT * FROM faq";

                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="faq-item" data-faq-id="1">
                            <div>
                                <button></button>
                                <span><?php echo $row['question']; ?></span>
                            </div>
                            <p><?php echo $row['answer']; ?></p>
                            <div class="buttons">
                                <a href="./editfaq.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <?php }} ?>

                    </div>
                </div>
            </div>



        </div>


    </div>

    <script src="./script.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>