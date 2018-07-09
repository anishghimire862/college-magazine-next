<?php
    session_start();
    include '../connection/connection.php';
    include_once 'notification.php';
    
    if(empty($_POST['username']) || empty($_POST['name']) || empty($_POST['password']) || empty($_POST['enrolledOn']) || empty($_POST['faculty'])) {
        createNotification("All the fields are mandatory and need to be correct for successful approval to join.");
        header('location: ../registration/student-signup.php');
    } else {
        if(isset($_POST["username"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["enrolledOn"]) &&    isset($_POST["faculty"])) {
            $username = $_POST["username"];
            $name = $_POST["name"];
            $password = $_POST["password"];
            $hashedPassword = hash('ripemd160',$password);
            $enrolledOn = $_POST["enrolledOn"];
            $faculty = $_POST["faculty"];
            
            $alreadyExists = "SELECT username FROM student WHERE username = '$username'";
            $result = $conn->query($alreadyExists);
            if($result->num_rows>0) {
                createNotification("Username is already taken. Please choose another username.");
                header('location: ../registration/student-signup.php');
            } else {

                $insertUser = "INSERT INTO student VALUES('$name', '$username', '$hashedPassword', 'link', '0','$enrolledOn', '$faculty')";

                if($conn->query($insertUser) == TRUE) {
                    createNotification("Account successfully created. You will be informed once you are approved.");
                    header('location: ../registration/student-signup.php');
                } else {
                    createNotification("Unable to register. Please fill all the fields again with correct informations.");
                    header('location: ../registration/student-signup.php');
                }
            } 
        }
    }
?>