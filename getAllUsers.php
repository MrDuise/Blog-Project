<?php
//Michael Duisenberg
//10-25-20
//CST-126 Blog Project
//Milestone 4 get all users page
//This page gets the users from the database and loads them into a 2D array
//Version 1.0
require_once 'myfuncs.php';





// Create connection

// Check connection
if (!dbConnect()) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";


//The following section of code reads in data from the table in the database
// to the browser instead of reading data from the browser into the database

//read in the ID, first name, and last from the users table
$sql = "SELECT ID, FIRST_NAME, LAST_NAME FROM users";
$result = mysqli_query(dbConnect(), $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. " - Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close(dbConnect());

?>
