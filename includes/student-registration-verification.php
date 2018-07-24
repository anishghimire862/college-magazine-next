<?php
    session_start();
    include '../connection/connection.php';
    include_once 'notification.php';
    
    if(empty($_POST['username']) || empty($_POST['name']) || empty($_POST['password']) || empty($_POST['enrolledOn']) || empty($_POST['faculty'])) {
        createNotification("All the fields are mandatory and need to be correct for successful approval to join.");
        header('location: ../registration/student-signup.php');
    } else {
        if(isset($_POST["username"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["enrolledOn"]) && isset($_POST["faculty"]) && !empty($_FILES["profilePicture"]['tmp_name'])) {
            $username = $_POST["username"];
            $length = strlen($username);
            $name = $_POST["name"];
            $password = $_POST["password"];
            $hashedPassword = hash('ripemd160', $password);
            $enrolled = $_POST['enrolledOn'];
            $faculty = $_POST['faculty'];
            $path = "../profile-picture/" .$_FILES['profilePicture']['name'];
            
            if($length<6) {
                createNotification("Please select username with six or more characters.");
                header('location: ../registration/student-signup.php');
            }
            
            $alreadyExists = "SELECT username FROM student WHERE username = '$username'";
            $result = $conn->query($alreadyExists);
            if($result->num_rows>0) {
                createNotification("Username is already taken. Please choose another username.");
                header('location: ../registration/student-signup.php');
            } else {
                
                    move_uploaded_file($_FILES['profilePicture']['tmp_name'],$path);
                
                    $insertUser = "INSERT INTO student(name,username,password,photo,approved,enrolled_on,faculty) VALUES('$name', '$username','$hashedPassword','$path',0,'$enrolled','$faculty')";

                    if($conn->query($insertUser) == TRUE) {
                        createNotification("Account successfully created. A special |A| badge near your username appears as soon as you are approved. Please login with your account.");
                        header('location: ../registration/student-signup.php');
                    } else {
                        createNotification("Unable to register. Please fill all the fields again with correct informations.");
                        createNotification($conn->error);
                        header('location: ../registration/student-signup.php');
                    }
                }    
            }
        else if(isset($_POST["username"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["enrolledOn"]) &&    isset($_POST["faculty"]) && empty($_FILES["profilePicture"]['tmp_name'])) {
            $username = $_POST["username"];
            $length = strlen($username);
            $name = $_POST["name"];
            $password = $_POST["password"];
            $hashedPassword = hash('ripemd160', $password);
            $enrolled = $_POST['enrolledOn'];
            $faculty = $_POST['faculty'];

            if($length<6) {
                createNotification("Please select username with six or more characters.");
                header('location: ../registration/student-signup.php');
                exit;
            }
            
            $alreadyExists = "SELECT username FROM student WHERE username = '$username'";
            $result = $conn->query($alreadyExists);
            if($result->num_rows>0) {
                createNotification("Username is already taken. Please choose another username.");
                header('location: ../registration/student-signup.php');
            } else {
                    $insertUser = "INSERT INTO student(name,username,password,approved,enrolled_on,faculty) VALUES('$name', '$username', '$hashedPassword','0','$enrolled','$faculty')";

                    if($conn->query($insertUser) == TRUE) {
                        createNotification("Account successfully created. A special |A| badge near your username appears as soon as you are approved. Please login with your account.");
                        header('location: ../registration/student-signup.php');
                    } else {
                        createNotification("Unable to register. Please fill all the fields again with correct informations.");
                        createNotification($conn->error);
                        header('location: ../registration/student-signup.php');
                    }
                }
        } else {
            createNotification("Unable to proceed.");
            header('location: ../registration/student-signup.php');
        }
    }

?>



