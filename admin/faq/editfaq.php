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

            <!-- Edit FAQ -->
            <div class="edit-faq">
                <h1>Edit FAQ</h1>
                <div class="faq-section">
                    <a href="../faq/" class="back-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <form id="editFAQForm" data-faq-id="3">
                        <div>
                            <label for="editFAQQ">Question</label>
                            <textarea name="edit-faq-q" id="editFAQQ">How is the product quality?</textarea>
                        </div>
                        <div>
                            <label for="editFAQA">Answer</label>
                            <textarea name="edit-faq-a" id="editFAQA">We provide quality products</textarea>
                        </div>
                        <input type="submit" name="edit" id="editFAQSubmit" value="Edit">
                        <p id="editFAQMsg"></p>
                    </form>
                </div>
            </div>



        </div>


    </div>

    <script src="./editFAQ.js"></script>
    <script src="../../library/admin.js"></script>
    <script src="https://kit.fontawesome.com/ca52502f1e.js" crossorigin="anonymous"></script>
</body>

</html>