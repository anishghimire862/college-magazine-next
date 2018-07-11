<?php
    $id = $_GET['article_id'];
    
    // retriving article details
    $sql = "SELECT * FROM article WHERE article_id='$id'";
    
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();
    
    $title = $row['title'];
    $category = $row['category'];
    $content = $row['content'];
    $posted_on = $row['posted_on'];
    $last_updated = $row['last_updated'];
    $posted_by = $row['posted_by'];
    $loginType = $row['login_type'];
    

    $counter = $row['views'];
    $counter++;
    $sql = "UPDATE article SET views = '$counter' WHERE article_id = '$id'";
    if($conn->query($sql)==TRUE) {
        $views = $row['views'];
    }
    // retriving user details 

    $sql = "SELECT * FROM $loginType WHERE username = '$posted_by'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $name = $row['name'];
    $approved = $row['approved'];
    $username = $row['username'];
    $image = $row['photo'];
    if(isset($loginType)){
        if($loginType == 'student') {
        $faculty = $row['faculty'];
        $enrolledOn = $row['enrolled_on'];
        }
    }
    
?>