<?php
//Michael Duisenberg
//11-18-20
//This page handles the database connection for the search form page and displays the results
//Milestone 7
//CST-126 Blog Project
session_start();
require_once 'myfuncs.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="letter-b-64v-prints.png">
<title> Search Posts </title>
<link rel="stylesheet" href="welcomeStyle.css">





<meta charset="ISO-8859-1">

</head>
<body>
<h1> Search Results </h1>
<?php include_once 'showNavBar.php';?>



<p>
		<?php 

		
		$title = $_GET['title'];
		$postKeyWords = $_GET['keyWords'];
		
		
		
            $sql = "SELECT * FROM `user_posts` WHERE `Blog_Title` LIKE '%$title%' OR `Blog_Entry` LIKE '%$postKeyWords%'";
           
           
           
           
            
           
           

            if(dbConnect())
            {
              $result = mysqli_query(dbConnect(),$sql);
    
                if($result)
                {
                     while($row = mysqli_fetch_assoc($result))
                    {
                        $userID = $row['users_ID'];
                        $sql_userPoster = "SELECT *FROM `users` WHERE `ID` = '$userID'";
                        $resultUsernamePost = mysqli_query(dbConnect(), $sql_userPoster);
                        $row_username_post = mysqli_fetch_assoc($resultUsernamePost);
                        $postWritter = $row_username_post['User_Name'];
                        
                        echo "This post was written by " . $postWritter . "<br>";
                        
                        echo "Post ID: " . $row['ID'] . "<br>";
                        echo "Post Title: " . $row['Blog_Title']. "<br>";
                        echo "Blog Entry: " . $row['Blog_Entry'] .  "<br>";
                     
                     
                     echo "===========<br>";
                    }
                 } 
                 else 
                 {
                     echo "Error with the SQL " . mysqli_error(dbConnect());
                 }
                     
            }
            else 
            {
                echo "Error Connecting " . mysqli_connect_error();
            }
            
            if(mysqli_num_rows($result) == 0)
            {
                echo "No results were found";
            }
                
        ?>
	</p>