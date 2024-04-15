<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_feb";
    $mysqli = mysqli_connect($host, $user, $pass, $db);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }