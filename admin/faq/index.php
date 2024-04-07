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

            <!-- FAQ -->
            <div class="faq">
                <h1>FAQ</h1>
                <div class="add-faq-btn">
                    <a href="./addfaq.php">Add FAQ</a>
                </div>
                <div class="faq-section">
                    <div class="faq-list">
                        <div class="faq-item" data-faq-id="1">
                            <div>
                                <button></button>
                                <span>Who are you?</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, doloremque. Odio,
                                tempora doloribus ducimus veritatis quasi autem aut optio praesentium esse, aperiam
                                eos laboriosam a commodi consectetur architecto eum? Quibusdam.</p>
                            <div class="buttons">
                                <a href="./editfaq.php" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <div class="faq-item" data-faq-id="2">
                            <div>
                                <button></button>
                                <span>Who are you?</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, doloremque. Odio,
                                tempora doloribus ducimus veritatis quasi autem aut optio praesentium esse, aperiam
                                eos laboriosam a commodi consectetur architecto eum? Quibusdam.</p>
                            <div class="buttons">
                                <a href="./editfaq.php" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
                        <div class="faq-item" data-faq-id="3">
                            <div>
                                <button></button>
                                <span>Who are you?</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, doloremque. Odio,
                                tempora doloribus ducimus veritatis quasi autem aut optio praesentium esse, aperiam
                                eos laboriosam a commodi consectetur architecto eum? Quibusdam.</p>
                            <div class="buttons">
                                <a href="./editfaq.php" class="edit">Edit</a>
                                <span class="delete">Delete</span>
                            </div>
                        </div>
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