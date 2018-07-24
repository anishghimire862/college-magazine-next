<?php
    include "connection/connection.php";
    $username = $_POST['username'];
    $length = strlen($username);
    $query = "SELECT * FROM teacher WHERE username = '$username'";
    $result = $conn->query($query);
    if($length<6) {
        echo "<div class='alert alert-warning'>Please select username with six or more characters.</div>";
        exit;
    }
    if($result->num_rows>0) {
        echo "<div class='alert alert-warning'>Please choose another username. $username is already taken.</div>";
    } else {
        echo "<div class='alert alert-primary'>You can use the desired username $username</div>";
    }
?>
