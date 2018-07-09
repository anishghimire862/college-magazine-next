<?php
    session_start();
    include  '../connection/connection.php';
    include_once '../includes/notification.php';
    if(isset($_SESSION['loggedin'])) {
        if(isset($_POST["title"]) && isset($_POST["category"]) && isset($_POST["content"])) {
            $title = $_POST["title"];
            $category = $_POST["category"];
            $content = $_POST["content"];
            
            // bug : ssubmits empty fields to the database
            
            $title = mysqli_real_escape_string($conn,$title);
            $category = mysqli_real_escape_string($conn,$category);
            $content = mysqli_real_escape_string($conn,$content);
            
            $username = $_SESSION['loggedin'];
            $loginType = $_SESSION['loginType'];

            $sql = "SELECT * FROM $loginType WHERE username = '$username'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            $approved = $row['approved'];
            $name = $row['name'];    
            if($approved == 1 && $loginType == 'student') {
                $insertContent = "INSERT INTO article(title,category,content,posted_by,views,approved,name,login_type)
                VALUES('$title', '$category', '$content', '$username',0,0,'$name','$loginType')";

                if($conn->query($insertContent) == TRUE) {
                    createNotification("Article submitted to admin for approval.");
                    header('location: ./index.php');
                } else {
                    createNotification("Unable to submit.");    
                }    
            } else {
                $insertContent = "INSERT INTO article(title,category,content,posted_by,views,approved,name,login_type)
                VALUES('$title', '$category', '$content', '$username',0,1,'$name','$loginType')";

                if($conn->query($insertContent) == TRUE) {
                    createNotification("Article successfully posted.");
                    header('location: ./index.php');
                } else {
                    createNotification("Unable to proceed.");
                    header('location: ./index.php');
                }
            }
        }
    }
?>
