<?php
    $servername = "143.198.160.247";
    $username = "mag_user";
    $password = "magpassword";
    $dbname = "mag_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed");
        echo $conn->connect_error;
    }

?>
