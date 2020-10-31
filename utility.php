<?php
//Michael Duisenberg
//10-25-20
//CST-126
//Milestone 4
//This page selects the user id, first name, and last name from the users table and loads it into a 2D array
//Version 1.0

require_once 'myfuncs.php';

function getAllUser()
{
    $sql = "SELECT ID, FIRST_NAME, LAST_NAME FROM `users` ";
    $result = mysqli_query(dbConnect(), $sql);
    $index = 0;
    
    $users = array();
    
    while($row = mysqli_fetch_assoc($result))
    {
        $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
        ++$index;
    }
    
    mysqli_close(dbConnect());
    return $users;
}