<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//creates the connection to the database and does the error checking
function dbConnect()
{
    $host = "127.0.0.1:49949";
    $username = "azure";
    $password = "6#vWHD_$";
    $database_name = "registration";
    
    
    $conn = mysqli_connect($host, $username, $password, $database_name);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}

//$_SESSION['username'] = $row['User_Name'];
//$_SESSION['userid'] = $row['ID'];


 
