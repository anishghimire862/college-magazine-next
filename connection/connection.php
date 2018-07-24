<?php
    $servername = "localhost";
    $username = "username";
    $password = "Fucky0ubitch";
    $dbname = "id6510059_college";

    $conn = new mysqli($servername, "root", "", $dbname);

    if($conn->connect_error) {
        die("Connection failed");
        echo $conn->connect_error;
    }

?>
