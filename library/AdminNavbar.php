<div class="admin-nav">
    <div class="sidebar-opener">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="profile">
        <i class="fa-regular fa-circle-user"></i>
        <span>Administrator</span>
    </div>
    <div class="logout">
        <?php
            if (isset($_SESSION['admin'])) {
                echo '<a href="../../library/sql/adminlogout.php">Logout</a>';
            } else {
                echo '<a href="../login">Login</a>';
            }
        ?>
        
    </div>
</div>