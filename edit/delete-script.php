<?php
    include '../connection/connection.php';
    include_once '../includes/notification.php';
    $article_id = $_GET['article_id'];
    
    $delete = "DELETE FROM article WHERE article_id=$article_id";
    if($conn->query($delete) == TRUE) {
        createNotification("Article successfully deleted.");
        header('location: ../index.php');    
    } else {
        createNotification("Error deleting article. Please try again.");
        header('location: ../index.php');
    }
?>