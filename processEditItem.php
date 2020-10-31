<?php
//Michael Duisenberg
//10-30-20
//CST-126 Blog Project
//This is the page that handles the connection and output when an admin edits a blog post
//Version 1.0
session_start();
require_once 'myfuncs.php';
?>

<!DOCTYPE html>
<html>
    <title>Crazy Car Stories</title>
    <head>
    <link rel="icon" href="letter-b-64v-prints.png">
    <link rel="stylesheet" href="welcomeStyle.css">
    <style>
		/* centers output on screen */
			.middle	p{
					height: 6em;
					position: relative;
					margin: 0;
					position: absolute;
					top: 50%;
					left: 50%;
					margin-right: -50%;
					transform: translate(-50%, -50%);
					text-align: center;
					background-color:grey;
					width:400px;
					border:1px solid black;
				}
				
				
		
		</style>
    </head>

    <body>
    <h1>Post Added</h1>
        	<div class="topnav">
            <p> Welcome <?php echo $_SESSION['username']; ?> </p>
			<a href="main-welcome.php">Home</a>
 			<a href="logOut.php">Logout</a> 
 			</div>


			<div class = "middle">
			<p>
			<?php 
			
			//words that are not allowed in blog post or title
			$forbiddenWords = array('dick','asshole','fuck');
			$role = $_SESSION['role'];
			
			     if(dbConnect())
			     {
			         $entryPosts= array($_GET['postTitle'],$_GET['blogEntry'],$_GET['id']);
			     }
			     
			     if(dbConnect() && $role = "admin")
			     {
			         //checks for words that not allowed in the code. the outer for loop controls the array $entryPosts
			         //the inner for loop controls the $forbiddenWords array
			         $forbidden = false;
			         for($a = 0; $a < 2;$a++)
			         {
			             for($b = 0; $b <= 2; $b++)
			             {
			                 if(strpos($entryPosts[$a], $forbiddenWords[$b]) !== false)
			                 {
			                     echo "The word " . $forbiddenWords[$b] . " is not allowed";
			                     $forbidden = true;
			                 }
			             }
			         }
			         
			         
			         
			         if($forbidden != true)
			         {
			             $sql = "UPDATE `user_posts` SET `Blog_Title` = '$entryPosts[0]', `Blog_Entry` = '$entryPosts[1]' WHERE `ID` = '$entryPosts[2]'";
			             if (mysqli_query(dbConnect(), $sql))
			             {
			                 echo "Update Successuful";
			             }
			         }
			         
			     }
			    
			   
			    
                      
              
                   
			     ?>
			</p>
			</div>	
	</body>
</html>