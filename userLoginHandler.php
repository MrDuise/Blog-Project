<?php
session_start(); 
//Michael Duisenberg
//10-26-20
//CST-126
//MileStone 2 login handler
//connects the login.php page to the server and makes sure that the username and password are correct before letting someone in.
//Version 3.0


            require_once 'myfuncs.php';



            if(dbConnect())
            {
                  $userLoginName = $_POST["userName"];
                  $loginPassWord = $_POST["passWord"];
            }
            
            //The following section of code reads in data from the table in the database
            // to the browser instead of reading data from the browser into the database
                
            //select statement reads the data from the table 'users'
            //the where statement makes sure that the Username and password that are pulled match the ones that were entered in the form, if they do not, nothing is pulled
            //the AND statement just strings together the where statements
            $sql = "SELECT * FROM `users` WHERE `User_Name` = '$userLoginName' AND `Password` = '$loginPassWord' LIMIT 1";
            $result = mysqli_query(dbConnect(),$sql);
            if (mysqli_num_rows($result) == 0) 
            {
                $message = "User does not exist";
                include 'loginFailed.php';   
            }
        
            else if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['User_Name'];
                $_SESSION['userid'] = $row['ID'];
                $_SESSION['role'] = $row['role'];
                //include 'main-welcome.php';
                //this line will cause the page to immeddlety jump to the next page
                 header("Location: main-welcome.php");
            }
          










mysqli_close(dbConnect());