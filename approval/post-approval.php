<?php
    session_start();
    include '../connection/connection.php';
    include_once '../includes/notification.php';
    if(isset($_SESSION['loginType'])) {
        if($_SESSION['loginType'] == 'admin') {
        
        $id = $_GET['article_id'];
    
        $sql = "UPDATE article SET approved = 1 WHERE article_id = '$id'";
        if($conn->query($sql) == TRUE) {
            createNotification("Article has been approved.");
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