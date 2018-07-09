<?php
    session_start();
    if(isset($_SESSION['loggedin'])) {
        session_destroy();
        header("location: ./index.php");
    } else {
        echo "You dont have right to view this page.";
    }
?>