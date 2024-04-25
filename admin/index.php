<?php
    session_start();
    
    if (isset($_SESSION['admin'])) {
        header("Location: ./neworders");
    } else {
        header("Location: ./login");
    }
?>