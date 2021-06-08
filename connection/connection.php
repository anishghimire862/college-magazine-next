<?php
    $servername = "localhost";
    $username = "maguser";
    $password = "magpassword";
    $dbname = "magdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed");
        echo $conn->connect_error;
    }

?>
