<?php
    include '../connection/connection.php';
    include_once '../includes/notification.php';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $article_id = $_POST['article_id'];
    
    $title = mysqli_real_escape_string($conn,$title);
    $content = mysqli_real_escape_string($conn,$content);
    
    $update = "UPDATE article SET title = '$title', content = '$content', category = '$category' WHERE article_id = '$article_id'";
    
    if($conn->query($update) == TRUE) {
        createNotification("Article successfully updated.");
        header('location: ../index.php');
    } else {
        createNotification("Eror updating article. Please try again.");
        header('location: ../index.php');
    }
?>