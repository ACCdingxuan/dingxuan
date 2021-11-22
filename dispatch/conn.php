<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "員工外派資訊系統";

    //connect to database
    $conn = mysqli_connect($hostname, $username, $password, $database);

    // check connection
    if(!$conn)
    {
        echo 'Connection error; ' . mysqli_connect_error();
    }
    //echo 'Connection successful';

 
?>