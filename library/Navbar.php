<?php
    $login_state = false;
    if (isset($_SESSION['user'])) {
        $login_state = true;
    }

    $cartcount = 0;
    if ($login_state) {
        $id = $_SESSION['user'];
        include 'sql/dbconn.php';
        $sql = "SELECT COUNT(*) as count FROM cart WHERE uid = $id";
        $result = mysqli_query($conn, $sql);
        $cartcount = intval(mysqli_fetch_assoc($result)['count']);
    }
?>

<div class="navbar">
    <div class="nav-logo">
        <a href="../home/">
            Print.
            <span>GIFT</span>
        </a>
    </div>
    <div class="nav-search">
        <form class="search" method="get" action="../products/index.php">
            <input type="search" name="search" placeholder="Search products">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="nav-cart">
        <?php
            if ($login_state) {
                echo
                    '
                        <a href="../cart/">
                            <i class="fa-solid fa-cart-shopping">
                            '
                                .
                                    (($cartcount > 0) ? '<span>' . $cartcount . '</span>' : null)
                                .
                            '
                            </i>
                        </a>
                    ';
            }
        ?>
    </div>
    <div class="nav-list" id="navList">
        <a href="../home/">Home</a>
        <a href="../products/">Products</a>
        <?php
            if (!$login_state) {
                echo
                    '
                        <a href="../login/" class="login-btn">Login</a>
                        <a href="../signup/" class="sign-btn">Sign Up</a>
                    ';
            }
        ?>
    </div>
    <div class="nav-profile">
        <?php
            if ($login_state) {
                echo
                    '
                        <i class="fa-regular fa-circle-user"></i>
                        <div class="nav-profile-list">
                            <a href="../account/">My Profile</a>
                            <form action="../library/sql/logout.php" method="POST">
                                <button type="submit" name="logoutbtn">Logout</button>
                            </form>
                        </div>
                    ';
            }
        ?>
    </div>
    <div class="nav-list-control" id="navListControl">
        <div id="navListControl1"></div>
        <div id="navListControl2"></div>
        <div id="navListControl3"></div>
    </div>
</div>