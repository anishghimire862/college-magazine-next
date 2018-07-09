<?php 
    include '../connection/connection.php';
    include_once 'notification.php';
    session_start();
    $loginType = $_POST['loginType'][0];
    
    $username = $_POST['username'];

    $password = $_POST['password'];
    $hashedPassword = hash('ripemd160',$password);
    
    $_SESSION['loginType'] = $loginType;
    $retriveUserInfo = "SELECT * FROM $loginType WHERE username = '$username'";

    $result = $conn->query($retriveUserInfo);

    $user = $result->fetch_assoc();
    
    $dbusername = $user['username'];
    $dbpassword = $user['password'];
    
    if(empty($_POST['username']) && empty($_POST['password'])) {
        createNotification("Empty fields can not be processed.");
    } else {
        if(isset($_POST['username']) && isset($_POST['password'])) {
            if($username == $dbusername && $hashedPassword == $dbpassword) {
                $_SESSION['loggedin'] = $username;
                $_SESSION['approvedInfo'] = "Welcome " .$user['username'];
                header('location: ../index.php');
            if($user['approved'] == 0) {
                createNotification("You will not be able to submit articles unless you are approved. Please wait for few moments.");
                header('location: ../index.php');
            }
         } else {
                createNotification("Invalid login credentials provided. Please log in again.");
                if($loginType=='student')
                    header('location: ../login/student-login.php');
                else if($loginType=='teacher')
                    header('location: ../login/teacher-login.php');
                else 
                    header('location: ../login/admin-login.php');
            }
        }
      }
?>
