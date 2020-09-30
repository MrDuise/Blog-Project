<?php

//Michael Duisenberg
//09-18-20
//CST-126
//MileStone 2 login handler
//connects the login.html page to the server and makes sure that the username and password are correct before letting someone in.

$userName = $_GET["userName"];
$passWord = $_GET["passWord"];



if($userName == NULL){
    echo "The Username is blank";
    exit;
} 

else if ($passWord == NULL){
    echo "The Password is blank";
    exit;
}




$host = "localhost";
$username = "root";
$password = "root";
$database_name = "registration";
$port = 8889;




// Create connection
$conn = mysqli_connect($host, $username, $password, $database_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";


//The following section of code reads in data from the table in the database
// to the browser instead of reading data from the browser into the database

//select statement reads the data from the table 'users'
//the where statement makes sure that the Username and password that are pulled match the ones that were entered in the form, if they do not, nothing is pulled
//the AND statement just strings together the where statements
$sql = "SELECT User_Name, Password FROM users WHERE User_Name = '$userName' AND Password = '$passWord'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    echo "login was successful, there is 1 user";
   
    
} else if(mysqli_num_rows($result) == 0) {
    echo "0 results, try again";
}
else{
    echo "login was successful, there are multiple users";
}

mysqli_close($conn);