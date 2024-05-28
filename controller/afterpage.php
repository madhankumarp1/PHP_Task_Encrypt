<?php
    // session_start();

    if (isset($_POST['logout'])) {
        echo 'Logged out';
        if (session_destroy()) {
            header("Location: ../index.php");
            exit();
        }
    }
?> 