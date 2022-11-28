<?php
    $servername = "localhost";
    $username = "sqluser";
    $password = "000000";
    $dbname = "notes";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection Failed" . mysqli_connect_error());
    }

?>