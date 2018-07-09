<?php
    session_start();
    include '../connection/connection.php';
    include_once 'notification.php';
    
    if(empty($_POST['username']) || empty($_POST['name']) || empty($_POST['password'])) {
        createNotification("All the fields are mandatory and need to be correct for successful approval to join.");
        header('location: ../registration/teacher-signup.php');
    } else {
        if(isset($_POST["username"]) && isset($_POST["name"]) && isset($_POST["password"])) {
            $username = $_POST["username"];
            $name = $_POST["name"];
            $password = $_POST["password"];
            $hashedPassword = hash('ripemd160', $password);
            $insertUser = "INSERT INTO teacher VALUES('$name', '$username', '$hashedPassword','link','0')";

            if($conn->query($insertUser) == TRUE) {
                createNotification("Account successfully created. You will be informed once you are approved.");
                createNotification($hashedPassword);
                header('location: ../registration/teacher-signup.php');
            } else {
                createNotification("Unable to register. Please fill all the fields again with correct informations.");
                header('location: ../registration/teacher-signup.php');
            }
        } else {
            createNotification("Unable to register. Please fill all the fields again with correct informations.");
            header('location: ../registration/teacher-signup.php');
        }
    }
?>