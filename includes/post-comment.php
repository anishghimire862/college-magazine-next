<?php
    session_start();
    include '../connection/connection.php';
    $comment = $_POST['comment'];
    $article_id = $_POST['aid'];
    $loginType = $_SESSION['loginType'];
    $commented_by = $_SESSION['loggedin'];
    $insert = "INSERT INTO comment(content,commented_by,article_id,login_type) VALUES('$comment','$commented_by',$article_id,'$loginType')";

    if($conn->query($insert) == TRUE) {
        $_SESSION['commmentSuccessful'] = "Successfully commented";
        $sql = "SELECT * FROM article WHERE article_id = $article_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();    
        $category = $row['category'];
        if($category == 'poem') {
            header('location: ../poem.php?article_id=' .$article_id);
        }
        if($category == 'story') {
            header('location: ../story.php?article_id=' .$article_id);
        }
        if($category == 'others') {
            header('location: ../others.php?article_id=' .$article_id);
        }
    } else {
        echo "Unable to comment.";
    }
    
?>