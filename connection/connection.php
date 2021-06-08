<?php
    $servername = "localhost";
    $username = "cmagazine_user";
    $password = "password";
    $dbname = "cmagazine_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed");
        echo $conn->connect_error;
    }

?>
