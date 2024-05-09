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

            <!-- Add FAQ -->
            <div class="add-faq">
                <h1>Add FAQ</h1>
                <div class="faq-section">
                    <a href="../faq/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <form id="addFAQForm" method="post" action="./sql/addfaq.php">
                        <div>
                            <label for="addFAQQ">Question</label>
                            <textarea name="add-faq-q" id="addFAQQ" placeholder="Enter Question"></textarea>
                        </div>
                        <div>
                            <label for="addFAQA">Answer</label>
                            <textarea name="add-faq-a" id="addFAQA" placeholder="Enter Answer"></textarea>
                        </div>
                        <input type="submit" name="add" id="addFAQSubmit" value="Add">
                        <p id="addFAQMsg"></p>
                    </form>
                </div>
            </div>



        </div>


    </div>

    <script src="./addFAQ.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>