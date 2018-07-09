<?php
    session_start();
    include '../connection/connection.php';
    include_once '../includes/notification.php';
    if(isset($_SESSION['loginType'])) {
        if($_SESSION['loginType'] == 'admin') {
    
        $username = $_GET['username'];

        $sql = "UPDATE student SET approved = 1 WHERE username = '$username'";
        if($conn->query($sql) == TRUE) {
            createNotification("$username has been approved.");
            header('location: ../dashboard/index.php');
        } else {
            createNotification("Unable to approve");
            header('location: ../dashboard/index.php');
            }
        }
    } else {
        header('location: ../index.php');
    }
?>