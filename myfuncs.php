<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//creates the connection to the database and does the error checking
function dbConnect()
{
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database_name = "registration";
    $port = 8889;
    
    $conn = mysqli_connect($host, $username, $password, $database_name, $port);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}

//$_SESSION['username'] = $row['User_Name'];
//$_SESSION['userid'] = $row['ID'];


 