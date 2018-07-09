<?php
    session_start();
    include '../connection/connection.php';
    include_once 'notification.php';
    
    if(empty($_POST['username']) || empty($_POST['password'])) {
        createNotification("All the fields are mandatory and need to be correct for successful approval to join.");
        header('location: ../registration/admin-signup.php');
    } else {
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            $username = trim($_POST["username"]);
            $name = trim(ucwords($_POST["name"]));
            $password = $_POST["password"];
            $hashedPassword = hash('ripemd160',$password);
            
            $alreadyExists = "SELECT username FROM admin WHERE username = '$username'";
            $result = $conn->query($alreadyExists);
            if($result->num_rows>0) {
                createNotification("Username is already taken. Please choose another username.");
                header('location: ../registration/admin-signup.php');
            } else {

                $insertUser = "INSERT INTO admin VALUES('$username', '$hashedPassword','1')";

                if($conn->query($insertUser) == TRUE) {
                    createNotification("Account successfully created.");
                    header('location: ../registration/admin-signup.php');
                } else {
                    createNotification("Unable to register. Please fill all the fields again with correct informations.");
                    header('location: ../registration/admin-signup.php');
                }
            } 
        }
    }
?>